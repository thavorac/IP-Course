<?php
$servername="localhost";
$username="root";
$password="";
$dbname="blogs";


//Create connection
 $conn = new mysqli($servername, $username, $password);
//check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";
// $sql="drop database blogs";
//Create database
$sql= "CREATE DATABASE  blogs";

 if($conn->query($sql)===TRUE){
     echo ("Database created successfully<br>");
 }
else{
 echo "Error Creating database:".$conn->error;
 }
 $conn = new mysqli($servername, $username, $password,$dbname);
 //create table
$sql="CREATE TABLE  visitorHistories(
    time timestamp default current_timestamp on update current_timestamp,
    visiting_page varchar(255) not null,
    impression varchar(100) ,
    visiting_device varchar(255)
)";
//check create table
if($conn->query($sql)===TRUE){
    echo ("Table visitorHistories created successfully");
}
else {
    echo "Error creating table:". $conn->error;
}


$conn->close();


?>