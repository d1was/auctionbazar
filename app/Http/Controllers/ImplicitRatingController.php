<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogEvidence;
use App\User;
use App\Transaction;
use DB;
use Auth;
use Phpml\Association\Apriori;

class ImplicitRatingController extends Controller
{
    //
    private $w1 = 100, $w2 = 50, $w3 = 15;

    public function calculate_implicit_rating_for_user()
    {
    	$max_rating = 1;
    	$aggregate_data = array();

        if(Auth::user()){
            $data = $this->query_aggregated_log_data_for_user(Auth::user());
        }
        else{
            $session_id = \Session::getId();
            $data = $this->query_aggregated_log_data_for_session($session_id);
        }

        if(sizeof($data)){
    	   foreach ($data as $row) {
    	       	$listing_id = $row->listing_id;

        		if(! in_array($listing_id, $aggregate_data)){
        			$aggregate_data[$listing_id] = array();
        		}

    		$aggregate_data[$listing_id][$row['event']] = $row['count'];


    		$ratings = array();

    		foreach ($aggregate_data as $key => $value) {
    			$rating =  (isset($value['bid']) ? $this->w1 * $value['bid'] : 0)  + (isset($value['productView']) ? $this->w2 * $value['productView'] : 0)  + (isset($value['productHover']) ? ($this->w3 * $value['productHover']) : 0);
    			$max_rating = max($rating, $max_rating);
    			$ratings[$key] = $rating;
    		}

    		foreach ($ratings as $listing_id => $rating) {
    			$ratings[$listing_id] = 10 * $rating / $max_rating ;
    		}



    	}
            return $ratings;
        }

        return 0;


    }
        


    public function query_aggregated_log_data_for_user(User $user)
    {	
    	$data = LogEvidence::where('user_id', $user->id)
    						->select('user_id','event','listing_id',DB::raw('count("event") as count'))
    						->groupBy('event','listing_id', 'user_id')
    						->get();
        	return $data;
    }

    public function query_aggregated_log_data_for_session($session_id)
    {
        $data = LogEvidence::where('session_id', $session_id)
                            ->select('session_id','event','listing_id',DB::raw('count("event") as count'))
                            ->groupBy('event','listing_id', 'session_id')
                            ->get();
            return $data;
    }


    public function classify($listing_id)
    {

        $samples =  $this->get_sample_for_apriori();
        $labels  = [];

        

         $associator = new Apriori($support = 0.5, $confidence = 0.5);
        $associator->train($samples, $labels);
        return $associator->predict([$listing_id]);
        
        return $associator->getRules();



    }

    public function get_sample_for_apriori()
    {
        $sample = array();

        $sessions = Transaction::select('session')->get()->unique('session');
        foreach ($sessions as $session) {
            $listings = Transaction::where('session', $session->session)->get();
            $list_items = array();
            foreach($listings as $listing)
            {
                 array_push($list_items, $listing->listing_id);
            }   
            array_push($sample, $list_items); 
        }

        return $sample;
    }

    public function saveLog($id)
    {
        
    }
}
