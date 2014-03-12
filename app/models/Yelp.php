<?php

class Yelp{


    public static function listReviews(){
        $query = DB::table('restaurants')
            ->select('restaurant_name', 'type', 'facebook_page', 'review_description','restaurant_id', 'rating', 'restaurants.id' )
            ->join('reviews', 'restaurants.id', '=', 'reviews.restaurant_id');

        $all = $query->get();
        return $all;


    }


}