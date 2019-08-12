<?php

namespace App\Exports;

use App\Listing;
use Maatwebsite\Excel\Concerns\FromArray;

class ListingExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
      	$listing = Listing::select('id', 'description')->get()->toArray();

     	$new     = ['id' => 'id', 'description' => 'description'];

 		$final   =  array_unshift($listing, $new);

 		return $listing;
    }
}
