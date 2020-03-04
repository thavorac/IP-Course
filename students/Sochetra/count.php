<?php
$servername = "db-mysql-sgp1-90651-do-user-3704357-0.a.db.ondigitalocean.com";
$username = "doadmin";
$password = "i33v31thav1vh1va";
$dbname = "defaultdb";
$port = "25060";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$device = $_SERVER['HTTP_USER_AGENT'];
$date = new DateTime();
$time = $date->getTimestamp();

$sql = "INSERT INTO visitors (time, device, page, impressionn) VALUES('$time', '$device', '$page', 'good')";
$conn->query($sql);

?>