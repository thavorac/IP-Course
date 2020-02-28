<?php
$visitor=90;
$like=70;
$dislike=10;
$visitorHistoies = array(
    array ("time" => "Yesterday 3am", "visiting page" => "Home page", "impression" => "Good", "visiting device"=>"Chrome"),
    array ("time" => "Yesterday 5am", "visiting page" => "Post1", "impression" => "Good", "visiting device"=>"ipad"),
    array ("time" => "Today", "visiting page" => "Post2", "impression" => "", "visiting device"=>"firefox"),
)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        ul{
            padding: 0;
            margin: 0;
            list-style-type: none;
        }
        ul li{
            float: left;
            border: 1px solid black;
            width: 100px;
            text-align: center;
            margin:44px;
        }
        .table1{
            border: 2px solid black;
            border-collapse: collapse;
            text-align: left;
            width: 100%;
            
        }
        th{
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
        td{
            border-left: 2px solid black;
            border-right: 2px solid black;

        }
        tr:nth-child(even){
            background-color:lightgrey;
        }
        .tr1{
            height: 50px;
        }
        img{
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body style='border: 1px solid black; width: 50%; padding: 20px;'>
    <a href='ex1.php'>Home</a>    |    <a href='ex2.php'>My Posts</a>
    <h2>Wellcome to my blog!</h2>
    <h3 style='display: inline;'>Total impression</h3>
    <span style='float:right;'>
        <select name='' id='' style='border: 3px solid black;'>
            <option value=''>This Month</option>
            <option value=''>Last Month</option>
            <option value=''>This year</option>
            <option value=''>Last year</option>
        </select>
    </span>
    <?php
    echo"
    <div><ul>
        <li><div style='padding:5px;'><img src='c.png' alt= ''><br>$visitor</div></li>
        <li><div style='padding:5px;'><img src='b.png' alt=''><br>$like</div></li>
        <li><div style='padding:5px;'><img src='a.png' alt=''><br>$dislike</div></li>
        </ul>
    </div>
    "
    ?>
    <h2>Visitor's history</h2>

    <table class='table1'>
        <tr>
            <th>Time</th>
            <th>Visiting page</th>
            <th>Impression</th>
            <th>Visiting device</th>
    </tr>
    <?php

    foreach($visitorHistoies as $visitorHistory)
    echo"
    <tr>
    <td>".$visitorHistory['time']."</td>
    <td>".$visitorHistory['visiting page']."</td>
    <td>".$visitorHistory['impression']."</td>
    <td>".$visitorHistory['visiting device']."</td>
    </tr>
    "
    ?>
    </table>
</body>
</html>