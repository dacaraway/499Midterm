<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 3/11/14
 * Time: 6:55 PM
 */

namespace Yelp\Facebook;


class FacebookPage {

    private $fbId;
    public function __construct($id){
        $this->fbId = $id;

    }

    public function getResults(){
        $endpoint = "http://graph.facebook.com/";
        $endpoint .= $this->fbId;


        $json = file_get_contents($endpoint);
        return json_decode($json);
    }

} 