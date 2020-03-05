<?php require 'insertData.php';
// Impression variable
$visitor = 220;
$like = 110;
$dislike = 10;

// Retrived Data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM visitor_histories";
// $sql = "SELECT * FROM visitor_histories LIMIT 10 offset 20";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="./038 Grid.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/8c03c9aa36.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="homepage-box">
        <div class="row">
            <ul class="navbar">
                <li style="font-size: 1.2em; font-weight:600;">Home</li>
                <li><a href="./myPost.php?">My Posts</a></li>
            </ul>
        </div>
        <h1>Welcome to my blog!</h1>
        <div class="impression-table">
            <div class="row">
                <h3 class="impression-title">Total Impression</h3>
                <form action="#">
                    <select name="" id="">
                        <option value="this_month">This month</option>
                        <option value="last_month">Last month</option>
                        <option value="last_few_month">Last few months</option>
                        <option value="last_year">Last year</option>
                    </select>
                </form>
            </div>
            <div class="row impression-row">
                <div class="col span-1-of-3 col-box">
                    <i class="fas fa-users big-icon"></i>
                    <?php echo "<h3>" . $visitor . " visitors</h3>" ?>
                </div>
                <div class="col span-1-of-3 col-box">
                    <i class="fas fa-thumbs-up big-icon"></i>
                    <?php echo "<h3>" . $like . " likes</h3>" ?>
                </div>
                <div class="col span-1-of-3 col-box">
                    <i class="fas fa-thumbs-down big-icon"></i>
                    <?php echo "<h3>" . $dislike . " dislikes</h3>" ?>
                </div>
            </div>
        </div>
        <div class="history">
            <h3>Visitor's history</h3>
            <table>
                <tr>
                    <th>Time</th>
                    <th>Visiting page</th>
                    <th>Impression</th>
                    <th>visiting device</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                              <td>" . $row['time_visiting'] . "</td>
                              <td>" . $row['visitor_page'] . "</td>
                              <td>" . $row['impression'] . "</td>
                              <td>" . $row['visit_device'] . "</td>
                          </tr>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>