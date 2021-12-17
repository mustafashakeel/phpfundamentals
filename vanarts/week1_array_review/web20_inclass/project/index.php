<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>

<div class="hero">
    <div>
        <h1>Welcome To Underwater World</h1>
        <h2>Not always underwater... just financially</h2>
    </div>
</div>

<?php

$images = array(
    array("file"=>"a.png", "alt"=>"Underwater", "link"=>"http://google.com"),
    array("file"=>"b.png", "alt"=>"Underwater", "link"=>"http://google.com"),
    array("file"=>"boy.png", "alt"=>"Underwater", "link"=>"http://google.com"),
    array("file"=>"c.png", "alt"=>"Underwater", "link"=>"http://google.com"),
    array("file"=>"d.png", "alt"=>"Underwater", "link"=>"http://google.com"),
    array("file"=>"face.png", "alt"=>"Underwater", "link"=>"http://google.com")
);

?>

<div class="gallery">
    <?php
    foreach($images as $image)
    {
        include("snippets/image_thumbnail.php");
    }
    ?>
</div>
    
</body>
</html>