<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/recom/', 'ImplicitRatingController@calculate_implicit_rating_for_user');

Route::get('/r/{id}/{num}',       'HomeController@getRecommendation') ->name('home');

Route::get('/',       'HomepageController@index') ->name('home');
Route::get('/search', 'HomepageController@search')->name('search');

/* Authentication Scaffolding */
Auth::routes(['verify' => true]);


Route::get('/savelog/{listing}/{event?}', 'ListingController@recordlog');

Route::get('/listing/{id}', 'ListingController@show')->name('single-listing');

Route::POST('/bid/create', 	'BidController@store')	 ->name('bid.store')->middleware('verified');

/* user account Routes */
Route::group(['middleware' => 'auth', 'prefix' => 'home'], function(){
    Route::resource('/listing',               'ListingController');
    Route::post    ('/listing/resubmit/{id}', 'ListingController@resubmit' )     ->name('listing.resubmit');
    Route::get     ('/bids'   ,               'BidController@index')		     ->name('bids.index');
    Route::get     ('/notifications',         'UserNotificationController@index')->name('notifications.index');
    Route::get     ('/queries',		          'QueryController@index')			->name('queries.index');
    Route::post    ('/query/create',          'QueryController@store')          ->name('queries.store');
    Route::POST    ('/query/reply',           'QueryController@reply')			->name('query.reply');
});
