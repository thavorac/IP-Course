
<?php
$visitor=390;
$like=20;
$dislike=10;
$visitHistory=array(array("Yesterday 3pm","Homepage","good","Chrome"),
                    array("Yesterday 5pm","Post 1","good","ipad"),
                    array("Today 7am","post 2"," ","Firefox")
);
echo'
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
            <p>'.$visitor.'</p>
        </div>
        <div style="border: 1px solid black; width: 150px;display: inline-block; text-align: center;margin: 20px;">
                <i class="fa fa-thumbs-up"  style="margin-top: 12px;color:cornflowerblue;"></i><br>
                <p>'.$like.'</p>
        </div>
        <div style="border: 1px solid black; width: 150px;display: inline-block;  text-align: center;margin: 20px;">
            <i class="fa fa-thumbs-down"  style="margin-top: 12px;color:cornflowerblue;"></i><br>
            <p>'.$dislike.'</p>
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
            <tr>
                <td>'.$visitHistory[0][0].'</td>
                <td>'.$visitHistory[0][1].'</td>
                <td>'.$visitHistory[0][2].'</td>
                <td>'.$visitHistory[0][3].'</td>
            </tr>
            <tr>
                <td>'.$visitHistory[1][0].'</td>
                <td>'.$visitHistory[1][1].'</td>
                <td>'.$visitHistory[1][2].'</td>
                <td>'.$visitHistory[1][3].'</td>
            </tr>
            <tr>
                <td>'.$visitHistory[2][0].'</td>
                <td>'.$visitHistory[2][1].'</td>
                <td>'.$visitHistory[2][2].'</td>
                <td>'.$visitHistory[2][3].'</td>
            </tr>
        </table>
    </div>
    </div>
</body>
</html>'
?>
