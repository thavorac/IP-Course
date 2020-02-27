<?php

echo "<html>";
echo "<head>";
echo "
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
";
echo "<head>";

echo "<body>";
echo"
<h4>Home &#9474; <a href='http://localhost:8888/Homework/mypost.php'>My Posts</a></h4>
<br>
<h3>Wellcome to My blog!</h3>
<br>
<label for='month'>Total impression</label>
<select>
    <option value='this month'>This month</option>
</select>
<div class='box1'>
    <img src='people.png' alt='Visitors'>
    <p>390 Visitors</p>

</div>
<div class='box2'>
    <img src='like.png' alt='Like'>
    <p>28 Likes</p>

</div>
<div class='box3'>
    <img src='dislike.png' alt='Dislike'>
    <p>12 dislikes</p>
</div>
<h4 style='margin-top: 15%;'>Visitor's history</h4>
<table>
    <th>Time</th>
    <th>Visiting page</th>
    <th>Impression</th>
    <th>Visiting device</th>
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
        <td>Today 7pm</td>
        <td>Post 2</td>
        <td></td>
        <td>Firefox</td>
    </tr>
</table>
";


echo "</body>";
echo "</html>";

?>