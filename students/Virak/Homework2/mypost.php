<?php
    $visitor_impress = array("390 Visitors", "28 Likes", "12 Dislikes");
    $visitor_history = array
    (
        array("Time", "Visiting", "Impression", "Visiting Device"),
        array("Yesterday 3pm",	"Homepage",	"good",	"Chrome"),
        array("Yesterday 5pm",	"Post 1",	"good",	"iPad"),
        array("Today 7am"	,"Post 2","",		"Firefox")
    );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">

        <h3><a href="mypost.php">Home</a> | <a href="home.php">My Post</a></h3>
        <h1>Welcome to my blog!</h1>
        Total Impression
        <select class="select">
            <option value="1">This month</option>
            <option value="2">Last month</option>
        </select>
        <br>
        <br>
        <div class="block grid-container">
            <div class="grid-item">
                <i class="fa fa-users"></i> <br>
                <?php echo $visitor_impress[0] ?>
            </div>
            <div class="grid-item">
                <i class="fa fa-heart"></i> <br>
                <?php echo $visitor_impress[1] ?>
            </div>
            <div class="grid-item">
                <i class="fa fa-cloud"></i> <br>
                <?php echo $visitor_impress[2] ?>
            </div>
        </div>
        Visitor's history
        <br>
        <br>
        <?php
        echo "<table cellspacing='0'>";
        for($i=0; $i<4; $i++){
            echo "<tr>";
            for($j=0; $j<4; $j++){
                echo "<td>" ;
                echo $visitor_history[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        
        ?>
        <!-- <table cellspacing="0">
            <tr>
                <td>Time</td>
                <td>Visiting page</td>
                <td>Impression</td>
                <td>Visiting device</td>
            </tr>
            <tr>
                <td>Yesterday 3pm</td>
                <td>Homepage</td>
                <td>good</td>
                <td>Chrome</td>
            </tr>
            <tr>
                <td>Yesterday 5pm</td>
                <td>Post 1</td>
                <td>good</td>
                <td>iPad</td>
            </tr>
            <tr>
                <td>Today 7am</td>
                <td>Post 2</td>
                <td></td>
                <td>Firefox</td>
            </tr>
        </table> -->

    </div>
</body> 
</html>