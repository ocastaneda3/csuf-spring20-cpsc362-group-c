<!DOCTYPE html>
<html>
<head>

</head>
<body>

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


$sql = "SELECT review, rating FROM user_reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b> Review: </b>" . $row["review"]. "<b> Rating: </b>" . $row["rating"]. "<br>";
    }

}

if(mysqli_query($conn,$sql)){
    
}else{
    echo mysqli_error($conn);
}	

?>
</body>
</html>