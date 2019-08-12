<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;
use App\Listing;
use App\Category;
use GuzzleHttp\Client;
use Auth;
use App\Bid;
use App\Traits\ImplicitRating;


class HomepageController extends Controller
{
    use ImplicitRating;

    //
    public function index()
    {
    	$endingListings = $this->getEndingListings();
    	$categories = $this->getCategories();
        $recommended_items = $this->getItemForRecommendation();
        if($recommended_items){
            $recommended_items = $recommended_items->take(4);
        }

    	return view('welcome', compact('endingListings', 'categories', 'recommended_items'));
    }

    public function getEndingListings()
    {
    	$bids = Listing::with('bids')->orderBy('deadline')->take(8)->get();

    	return $bids;
    }

    public function getCategories($number = 15)
    {
    	$categories = Category::orderBy('title')->take($number)->get();

    	return $categories;
    }




    public function search(Request $request)
    {
        if($request->has('q')){
            $query = $request->q;

            $listings = Listing::where('title', 'LIKE', '%' . $query . '%')
                                ->orWhere('description', 'LIKE' , '%' . $query . '%')
                                ->where('is_active','true')->paginate(10);
            return view('search', compact('listings'));

        }
        else{
            return redirect()->route('home');
        }
    }

    /*
    *  Get 5 latest bidded item and recommend based on them
    *
    */
    public function makeRecommendation()
    {
        if($user = Auth::id()){
            $bids = Bid::select('listing_id')->where('user_id' , $user)->orderBy('created_at', 'desc')->take(5)->get()->unique('listing_id');
            
            $recommended_listings = array();

            foreach ($bids as $bid) {
                $items = $this->recommedBasedOnItem($bid->listing_id, 4);

                if(!$items){
                    return false;
                }                
                array_push($recommended_listings, $items);
            }
            if($listing = $this->calculate_implicit_rating_for_user()){
                arsort($listing);                                
                foreach ($listing as $key => $value) {
                    $items = $this->recommedBasedOnItem($key,4);

                    if(!$items){
                        return false;
                    }
                    array_push($recommended_listings, $items);

                    }  
            }

            $unique_item = (array_unique($recommended_listings, SORT_REGULAR));


            return $this->getOnlyListingId($unique_item);
        }
        else{
            if($listing = $this->calculate_implicit_rating_for_user()){
            arsort($listing);
            $recommended_listings = array();
            if($listing){
            foreach ($listing as $key => $value) {
                $items = $this->recommedBasedOnItem($key,4);

                if(!$items){
                    return false;
                }
                array_push($recommended_listings, $items);

            }
                $unique_item = (array_unique($recommended_listings, SORT_REGULAR));

                return $this->getOnlyListingId($unique_item);
    
        }
        }
        else{
            return false;
        }
    }
    return false;
    }

    /*
    * get item from array of id
    *
    */
    public function getItemForRecommendation()
    {
        $listing_ids = $this->makeRecommendation();
        if(!$listing_ids){
            return 0;
        }

        $items = new Collection();

        foreach ($listing_ids as $key => $value) {
            if(Auth::user() AND sizeof(Bid::where('listing_id', $value)->where('user_id', Auth::id())->get())){
                continue;
            }
            $listing = Listing::find($value);
            $items->push($listing);
        }

        return $items;

    }


    /*
    *Get Content Based Recommendation
    *
    */
    public function recommedBasedOnItem($id, $num)
    {

        $client = new Client();
        $response = $client->request('POST', 'http://127.0.0.1:5000/predict', [
                'headers' => [
                    'X-API-TOKEN' => 'FOOBAR1',
                    'Content-Type' => 'application/json',
                    'charset'      => 'utf-8'
                ],
                \GuzzleHttp\RequestOptions::JSON => [
                    "item" => (int) $id,
                    "num"  => (int) $num,
                ]
        ]);
        if($response->getStatusCode() != 200){
            return false;
        }


        return json_decode($response->getBody()->getContents());
    }


/*
* To get only listing id
*
*/
public function getOnlyListingId($Multiarray)
{
    $final = array();

    foreach ($Multiarray as $array) {
        # code...
        foreach ($array as $arr) {
            # code...
            array_push($final, $arr[0]);
        }

    }
    return $final;
}
}