<!doctype html>
<html>
    <head>
        <title>Yelp</title>
    </head>
    <body>


    <h1> Yelp</h1>

    <?php foreach ($reviews as $review) : ?>
        <br>
        <br>

        <div>
        <font size = "5">
        <b>
        <?php echo $review->restaurant_name;?>
        </b>
        </font>
    </div>
        <br>
    <div>
        <?php echo $review->type; ?>
    </div>
        <br>

        <?php
        if($review->facebook_page){
            $url = "http://facebook.com/".$review->facebook_page."";

            echo "<a href=".$url.">Facebook Link</a>";
        }
        else{
            echo "No Facebook";
        }?>

    <div>
        <?php
        if($review->review_description){
        $url = "/restaurant/".$review->id."/reviews";
        echo "<a href=".$url.">See Review</a>";
        }
        ?>

    </div>


    <?php endforeach; ?>

    </body>

</html>