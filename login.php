<?php

$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "login";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    echo 'Not connected to Server';
}

if(!mysqli_select_db($conn,'login')){
    echo 'Database not selected';
}


$Review = $_POST['review'];
$Rating = $_POST['rating'];

$sql = "INSERT INTO user_reviews (review, rating) VALUES ('$Review', '$Rating')";

if(mysqli_query($conn,$sql)){
    echo 'Review Inserted';
    header("Refresh:1; url=game-list.html");
}else{
    echo mysqli_error($conn);
}	
header("Refresh");
?>