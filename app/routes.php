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
    $theReview = "";
    $api = "";
    $json = "";
    foreach ($reviews as $review) :
        if($review->id == $id):
            $theReview = $review;
            break;
        endif;
    endforeach;

    if($theReview->facebook_page):
        $api = new \Yelp\Facebook\FacebookPage($theReview->facebook_page);
        $json = $api->getResults();
    endif;


    return View::make('yelp/reviews',[
        'theReview' => $theReview,
        'json' => $json,
        'id' => $id
    ]);


});