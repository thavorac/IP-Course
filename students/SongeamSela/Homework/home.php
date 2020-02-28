<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        border-color: black;
        border-style: solid;
        position: absolute;
        height: 80px;
        width: 150px;
        top: 22%;
        text-align: center;        
    }
    .box1{
        left: 2%;

    }
    .box2{
        left: 29%;
    }
    .box3{
        left: 56%;
    }
    img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 5px;
        width: 30px;
        height: 30px;
    }
    table{
        border: 1px solid black;
        border-spacing: 0px;

    }
    th{
        background-color:lightgray;
    }
    td,th{
        border: 1px solid black;
        padding: 5px;
        width: 150px;
        height: 40px;
        text-align: center;
        
    }
    h4,h3,label{
        margin-left: 2%;
    }
    select{
        margin-left: 50%;
    }
</style>
<?php
    $visitor = 100;
    $like = 20;
    $dislike = 30;
    $history = array(
        array("Yesterday 3pm", "Homepage", "good", "Chrome"),
        array("Yesterday 5pm", "Post 1", "good", "Ipod"),
        array("Today 7pm", "Post 2", "", "Firefox")

    );
?>

<body>
    <h4>Home &#9474; <a href="http://localhost:8888/Homework/mypost.php">My Posts</a></h4>
    <br>
    <h3>Wellcome to My blog!</h3>
    <br>
    <label for="month">Total impression</label>
    <!-- <h4>Total impression</h4> -->
    <select>
        <option value="this month">This month</option>
    </select>
    <div class="box1">
        <img src="people.png" alt="Visitors">
        <p>390 Visitors</p>

    </div>
    <div class="box2">
        <img src="like.png" alt="Like">
        <p>28 Likes</p>

    </div>
    <div class="box3">
        <img src="dislike.png" alt="Dislike">
        <p>12 dislikes</p>
    </div>
    <h4 style="margin-top: 15%;">Visitor's history</h4>
    <table>
        <tr id= "htable">
            <th>Time</th>
            <th>Visiting page</th>
            <th>Impression</th>
            <th>Visiting device</th>
        </tr>
        
        <?php
            foreach($history as $h)
            echo "
            <tr>
                <td>$h[0]</td>
                <td>$h[1]</td>
                <td>$h[2]</td>
                <td>$h[3]</td>
            </tr>
            ";
        ?>
    </table>
</body>
</html>