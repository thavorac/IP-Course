<?php
echo"
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
    
    <div><ul>
        <li><div><img src='c.png' alt= '' style='width: 30px; height: 30px;'><br>390 Visitors</div></li>
        <li><div><img src='b.png' alt='' style='width: 30px; height: 30px;'><br>28 Likes</div></li>
        <li><div><img src='a.png' alt='' style='width: 30px; height: 30px;'><br>12 Dislikes</div></li>
        </ul>
    </div>
    <h2>Visitor's history</h2>
    <table class='table1'>
        <tr style='border-top: 2px solid black; background-color: darkgrey;'>
            <th>Time</th>
            <th>Visiting page</th>
            <th>Impression</th>
            <th>Visiting device</th>
        </tr>
        <tr class='tr1' >
            <td>Homepage</td>
            <td>Yesterday 3pm</td>
            <td>good</td>
            <td>Chrome</td>
        </tr>
        <tr class='tr1'>
            <td>Yeserday 5pm</td>
            <td>Post1</td>
            <td>good</td>
            <td>ipad</td>
        </tr>
        <tr style=' border-bottom: 2px solid black;' class='tr1'>
            <td>Today 7am</td>
            <td>Post2</td>
            <td></td>
            <td>Firefox</td>
        </tr>
    </table>
</body>
</html>
"

?>