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
//Drop database
 //$sql="drop database blogs";
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
    echo ("Table visitorHistories created successfully"."</br>");
}
else {
    echo "Error creating table:". $conn->error."</br>";
}
$sql="CREATE TABLE posts (
    id int AUTO_INCREMENT ,
    title varchar(255) not null,
    content text,
    status ENUM ('draft','published') default 'draft' ,
    Primary key (id)
)";
if($conn->query($sql)===TRUE){
    echo ("Table posts created successfully"."</br>");
}
else {
    echo "Error creating table:". $conn->error."</br>";
}

$sql="CREATE TABLE image_avatars(
    id int auto_increment primary key,
    url varchar(255) not null,
    post_id int ,
    FOREIGN KEY (post_id) REFERENCES posts(id)
)";
if($conn->query($sql)===TRUE){
    echo ("Table image_avatars created successfully"."</br>");
}
else {
    echo "Error creating table:". $conn->error."</br>";
}
$sql="CREATE TABLE image_contents(
    id int auto_increment primary key,
    url varchar(255) not null,
    post_id int ,
    FOREIGN KEY (post_id) REFERENCES posts(id)
)";
if($conn->query($sql)===TRUE){
    echo ("Table image_contents created successfully"."</br>");
}
else {
    echo "Error creating table:". $conn->error."</br>";
}

$conn->close();


?>