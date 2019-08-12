<?php

namespace App\Http\Controllers;

use App\Category;
use App\Listing;
use App\LogEvidence;
use Illuminate\Http\Request;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\Auth;
use App\Http\ImplicitRatingController;
use App\Traits\AprioriRecommendation as Apriori;

class ListingController extends Controller
{
    use UploadFile, Apriori;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $active_listings = Listing::where('is_active', true)->where('user_id', Auth::id())->get();
        $inactive_listings = Listing::where('is_active', false)->where('user_id', Auth::id())->get();

        return view('frontpanel.listing.show', compact('active_listings', 'inactive_listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::where('parent_id','0')->get();

        return view('frontpanel.listing.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $storeFileNames = $this->storeImage($request);

        $listing = Listing::create([
            'category_id'       => $request->category,
            'user_id'           => Auth::id(),
            'title'             => $request->title,
            'initial_price'     => $request->price,
            'deadline'          => $request->deadline,
            'description'       => $request->description,
            'min_bid_interval'  => $request->min_bid_price,
            'photo_main'        => $storeFileNames[0],
            'photo_1'           => !empty($storeFileNames[1]) ? $storeFileNames[1] : '',
            'photo_2'           => !empty($storeFileNames[2]) ? $storeFileNames[2] : '',
            'photo_3'           => !empty($storeFileNames[3]) ? $storeFileNames[3] : '',
            'photo_4'           => !empty($storeFileNames[4]) ? $storeFileNames[4] : '',
            'condition'         => $request->condition,
            'brand'             => $request->brand,
            'quantity'          => $request->quantity,
            'dispatch'          => $request->dispatch,
            'location'          => $request->location
        ]);

        return redirect()->back();
    }

    private function storeImage(Request $request)
    {
        $filenames = array();
        $folder = '/images/listings/';
        if(!empty($request->file())){
            foreach ($request->file() as $file){
                $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $file->getClientOriginalExtension() ;
                $filepath  = $folder . $imageName;
                $this->uploadOne($file, $folder, 'public', $imageName);
                array_push($filenames, $filepath);
            }
        }
        return $filenames;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        $recom = $this->classify($id);
        $recom_products = array();

        foreach ($recom as $reco) {
            foreach ($reco as $product) {
                $listing = Listing::where('id', $product)->where('is_active', true)->first();
                if(! in_array($listing, $recom_products))
                {
                    array_push($recom_products, $listing);
                }
            }
        }

        $single_listing = Listing::findOrFail($id);

        if($request->registerEvents){
            $this->recordLog($single_listing, 'productView');
        }

        return view('frontpanel.listing.single', ['listing' => $single_listing, 'recommended_products' => $recom_products ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $listing = Listing::find($id);

        return view('frontpanel.listing.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function resubmit($id, Request $request)
    {
        $deadline = $request->deadline;
        $listing = Listing::find($id);

        $listing->is_active = true;
        $listing->deadline = $deadline;
        $listing->save();


        foreach($listing->bids as $bid)
        {
            $bid->delete();
        } 

        return redirect()->back();

    }

    public function recordLog(Listing $listing, $event = 'productView')
    {
        $user = null;
        $session_id = null;
        if(Auth::user()){
        $user = Auth::id();
        }
        else{
            $session_id = \Session::getId();
        }

        LogEvidence::create([
            'listing_id' => $listing->id,
            'user_id'  => $user,
            'session_id' => $session_id,
            'event'  => $event
        ]);
        return response()->json(200);
    }
}
