<?php include "connection.php"; ?>
<?php
    $visitor_impress = array("390 Visitors", "28 Likes", "12 Dislikes");
    $visitor_history = array
    (
        array("Time", "Visiting", "Impression", "Visiting Device"),
        array("Yesterday 3pm",	"Homepage",	"good",	"Chrome"),
        array("Yesterday 5pm",	"Post 1",	"good",	"iPad"),
        array("Today 7am"	,"Post 2","",		"Firefox")
    );

    $visiting_page=explode("/",$_SERVER['PHP_SELF']);
    $page=explode(".", $visiting_page[count($visiting_page)-1]);
    $visiting_device=explode("/",$_SERVER['HTTP_USER_AGENT']);
    $device=$visiting_device[0];
    
    $insert = "insert into visitor_histories(time,visiting_page,impress,visitor_device) values(
        current_timestamp,'{$page[0]}','Good', '{$device}'
        )";

    $i = run_query($insert);
    $visitor = 0;
    
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">

    <br><br>
        <h3 class="widget-heading">Home | <a href="mypost.php"> My Post</a></h3>
        <h1>Welcome to my blog!</h1>
        Total Impression
        <select class="select">
            <option value="1">This month</option>
            <option value="2">Last month</option>
        </select>
        <br>
        <br>
        <?php 
            $amount = run_query("select * FROM visitor_histories"); 
            foreach($amount as $vd):
                $visitor++;
            endforeach;
        ?>
        <div class="block grid-container">
            <div class="grid-item">
                <i class="fa fa-users"></i> <br>
                <?php  echo $visitor; ?>
            </div>
            <div class="grid-item">
                <i class="fa fa-heart"></i> <br>
                <?php echo $visitor_impress[1] ?>
            </div>
            <div class="grid-item">
                <img style="width:30px" src="images/thumbs-down-solid.svg" alt="" srcset=""> <br>
                <?php echo $visitor_impress[2] ?>
            </div>
        </div>
        Visitor's history
        <br>
        <br>
        <?php $tb_visitor_histories = run_query("select * from visitor_histories"); ?>
        <table cellspacing="0">
        <tr>
        <td>Time</td>
        <td>Visiting page</td>
        <td>Impression</td>
        <td>Visting Device</td>
        </tr>
        <?php foreach($tb_visitor_histories as $visitor): ?>
            
            <?php echo "<tr>" ?>
                <?php
                    echo "<td>" ;
                    echo $visitor['time'];
                    echo "</td>";
                    echo "<td>" ;
                    echo $visitor['visiting_page'];
                    echo "</td>";
                    echo "<td>" ;
                    echo $visitor['impress'];
                    echo "</td>";
                    echo "<td>" ;
                    echo $visitor['visitor_device'];
                    echo "</td>";
                ?>
        <?php endforeach; ?>
        </table>
        
        

    </div>
</body> 
</html>