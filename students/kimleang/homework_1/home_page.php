
<?php
$visitor=390;
$like=20;
$dislike=10;
$visitHistory=array(array("time"=>"Yesterday 3pm","visit"=>"Homepage","impression"=>"good","device"=>"Chrome"),
                    array("time"=>"Yesterday 5pm","visit"=>"Post 1","impression"=>"good","device"=>"ipad"),
                    array("time"=>"Today 7am","visit"=>"post 2","impression"=>" ","device"=>"Firefox")
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        td,tr{border: 1px solid black; padding: 10px; width: 115px;}
    </style>
</head>
<body>
    <div style="border: 1px solid black; width: 42%; margin-left: 25%;margin-top: 5%;">
    <div style="display: inline-flex; margin-left: 20px;">
        <a href="home_page.php"><p>Home</p></a>
        <p>&nbsp;&nbsp;|&nbsp;</p>
    </div>
    <div style="display: inline-flex;">
        <a href="my_post.php"><p>My Posts</p></a>
    </div>
    <div style="margin-left: 20px;"><p style="font-size: larger;"><b>Welcome to my blog !</b></p></div>
    <div style="display: inline-flex; margin-left: 20px;"><p style="font-size:small;"><b>Total Impression</b></p></div>
    <div style="display: inline-flex;font-size: small; margin-left: 358px;">
        <select name="date" id="1">
            <option value="This month">This month</option>
            <option value="This year">This year</option>
        </select>
    </div>
    <div>
        <div style="border: 1px solid black; width: 150px; display: inline-block; text-align: center;margin: 20px;">
            <i class="fa fa-users" style="margin-top: 12px; color:cornflowerblue;"></i><br>
            <p><?php echo"'.$visitor.' visited"?></p>
        </div>
        <div style="border: 1px solid black; width: 150px;display: inline-block; text-align: center;margin: 20px;">
                <i class="fa fa-thumbs-up"  style="margin-top: 12px;color:cornflowerblue;"></i><br>
                <p><?php echo"'.$like.' liked"?></p>
        </div>
        <div style="border: 1px solid black; width: 150px;display: inline-block;  text-align: center;margin: 20px;">
            <i class="fa fa-thumbs-down"  style="margin-top: 12px;color:cornflowerblue;"></i><br>
            <p><?php echo"'.$dislike.' disliked"?></p>
        </div>
    </div>
    <div style="margin-left:20px; margin-bottom: 20px;">
        <p><b>Visitor history</b></p>
        <table style="border-collapse: collapse;">
            <tr>
                <td>Time</td>
                <td>Visiting page</td>
                <td>Impression</td>
                <td>Visiting device</td>
            </tr>
            <?php
            foreach($visitHistory as $history)
            echo"
                <tr>
                    <td>".$history['time']."</td>
                    <td>".$history['visit']."</td>
                    <td>".$history['impression']."</td>
                    <td>".$history['device']."</td>
                </tr>";
            ?>
        </table>
    </div>
    </div>
</body>
</html>
