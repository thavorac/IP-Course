<?php
$visitor = 220;
$like = 110;
$dislike = 10;
$history_visitors = array(
    array("Time" => "Yesterday 3 am", "Visiting_page" => "Homepage", "Impression" => "good", "visiting_device" => "Chrome"),
    array("Time" => "Yesterday 5 am", "Visiting_page" => "Post 1", "Impression" => "good", "visiting_device" => "iPad"),
    array("Time" => "Today 7 am", "Visiting_page" => "Post 2", "Impression" => "", "visiting_device" => "Firefox"),
)
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
                <li><a href="./myPost.php">My Posts</a></li>
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
                foreach ($history_visitors as $history_visitor)
                    # code...
                    echo "<tr>
                              <td>" . $history_visitor['Time'] . "</td>
                              <td>" . $history_visitor['Visiting_page'] . "</td>
                              <td>" . $history_visitor['Impression'] . "</td>
                              <td>" . $history_visitor['visiting_device'] . "</td>
                          </tr>";

                ?>
            </table>
        </div>
    </div>
</body>

</html>