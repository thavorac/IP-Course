<?php
echo "This is my index"

$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = mysqli_connect($servername,$username,$password);
//Check connection
if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}

$query = "INSERT INTO activity_histories('time','visitor_page','visit_device') VALUES";

mysqli_close($conn);
?>