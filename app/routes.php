<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

    $reviews = Yelp::listReviews();


	return View::make('yelp/display', [
        'reviews' => $reviews
    ]);
});


Route::get('/restaurant/{id}/reviews', function($id){

    $reviews = Yelp::listReviews();
    $theReview = array();
    $api = "";
    $json = "";
    foreach ($reviews as $review) :
        if($review->id == $id):
            array_push($theReview,$review);

        endif;
    endforeach;

    if($theReview[0]->facebook_page):
        $api = new \Yelp\Facebook\FacebookPage($theReview[0]->facebook_page);
        $json = $api->getResults();
    endif;


    return View::make('yelp/reviews',[
        'theReview' => $theReview,
        'json' => $json,
        'id' => $id
    ]);


});