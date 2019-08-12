<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$categories = [
    		'Sunglasses', 'Watches', 'Women\'s Clothing', 'Men\'s Clothing',
    		'Motorcycle', 'Cars', 'Body Care', 'Books', 'Furniture', 'laptops',
    		'Desktops', 'Digital Camera', 'Headphone ', 'Television', 'Mobile Phones',
    		'Music Instrument', 'Sports Wears', 'Video Games'
    	];

    	foreach ($categories as $category) {
    		Category::create([
    			'title' => $category,
    			'parent_id' => 0
    		]);
    	}
    }
}
