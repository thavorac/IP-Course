<?php
// database variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

$date_visited = date('Y-m-d H:i:s');
$impression = "good";
$page_visited = basename($_SERVER['PHP_SELF'], '.php');
//$url = "$_SERVER[REQUEST_URI]";

$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($userAgent, 'msie') !== FALSE)
    $browser =  'Internet explorer';
elseif (strpos($userAgent, 'trident') !== FALSE) //For Supporting IE 11
    $browser = 'Internet explorer';
elseif (strpos($userAgent, 'firefox') !== FALSE)
    $browser = 'Mozilla Firefox';
elseif (strpos($userAgent, 'chrome') !== FALSE)
    $browser = 'Google Chrome';
elseif (strpos($userAgent, 'opera mini') !== FALSE)
    $browser = "Opera Mini";
elseif (strpos($userAgent, 'opera') !== FALSE)
    $browser = "Opera";
elseif (strpos($userAgent, 'safari') !== FALSE)
    $browser = "Safari";
else
    $browser = 'Unrecognized';

// What version? 
if (preg_match('/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/', $userAgent, $matches)) {
    $version = $matches[1];
} else {
    $version = 'unknown';
}

// Running on what platform? 
if (preg_match('/linux/', $userAgent)) {
    $platform = 'linux';
} elseif (preg_match('/macintosh|mac os x/', $userAgent)) {
    $platform = 'mac';
} elseif (preg_match('/windows|win32/', $userAgent)) {
    $platform = 'windows';
} else {
    $platform = 'unrecognized';
}

//Device that user visited
$device_visited = $browser . ', ' . $version . 'v, ' . $platform;


//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql insert data
$sql = "INSERT INTO visitor_histories (time_visiting, visitor_page, impression, visit_device) VALUES ('$date_visited', '$page_visited', '$impression', '$device_visited')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'console.log("success Recorded")';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close connection
mysqli_close($conn);