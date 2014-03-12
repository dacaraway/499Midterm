<!doctype html>
<html>
<head>
    <title>Yelp</title>
</head>
<body>

<h1> Yelp</h1>
<?php


    var_dump($theReview);
    $rest = $theReview->restaurant_name; ?>
    <font size = '5' color = blue>

        <?php echo "Reviews for ".$rest."";?>
    </font>

    <br>
    <br>

<?php

    if($theReview->facebook_page){
        $like = $json->likes;
        $checkins = $json->checkins;

        echo "Likes: ".$like;?>
        <br>
        <?php
        echo "Checkins: ".$checkins;

    }?>
    <br>
    <br>
    <?php

    for($i=0; $i< $theReview->rating; $i++):?>

        <a href="http://s1369.photobucket.com/user/dacaraway/media/christmas_star_zps6670502b.png.html" target="_blank"><img src="http://i1369.photobucket.com/albums/ag215/dacaraway/christmas_star_zps6670502b.png" border="0" alt=" photo christmas_star_zps6670502b.png"/></a>

    <?php endfor;?>

    <br>
    <?php

    echo $theReview->review_description;
?>

</body>

</html>