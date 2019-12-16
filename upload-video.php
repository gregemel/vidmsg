<?php

if(isset($_FILES["video"])){
    // Define a name for the file
    // $fileName = "myvideo.webm";
    $fileName = date("Y-m-d-H-i-s");
    echo "Datetime: ".$fileName."<br>";

    // In this case the current directory of the PHP script
    $uploadDirectory = '/var/www/html/video/'. $fileName.'.webm';

    echo "Stored in: " .$uploadDirectory . "<br>";
    echo "Type: " . $_FILES["video"]["type"] . "<br>";
    echo "Size: " . ($_FILES["video"]["size"] / 1024) . " kB<br>";
    echo "temp:".$_FILES["video"]["tmp_name"] . "<br>";
           
    // Move the file to your server
    if (!move_uploaded_file($_FILES["video"]["tmp_name"], $uploadDirectory)) {
        echo("Couldn't upload video !");
    }
}else{
    echo "No file uploaded";
}
 
?>