<?php
$visitor='100';
$like='20';
$dislike='10';
$visitorHistory = array(
                 array("time"=> "Yesterday 3pm", "visiting_page" => "Home page","impression" => "Good", "visiting_device" => "Chrome"),
                 array("time"=> "Yesterday 5pm", "visiting_page" => "Post 1", "impression" =>"Good", "visiting_device" => "iPad"),
                 array("time"=> "Today 7am", "visiting_page" => "Post 2", "impression" => null,"visiting_device" => "Firefox"));
echo"<html><head>";
echo'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
echo' <style>
.content{
    max-width:810px;
    margin: auto;
}
h2{
    text-align: center;
}
.d{
    display: flex;
    width:100%
    margin-left: 20px; 
}
.d1{
    font-size: 50px;
    width: 65px;
    margin: 1px;
}
.d3{
    margin: 5px;
    font-size: 30px;
}
#d2{
    width: 400px;
    height: 45px;
    font-size: 20px;
}
.d4{
    border: 1px solid black;
    border-radius: 25px;
    width: 100px;
    height: 45px;
    background-color: white;
   margin-left: 20px;
}
#div1{
    margin-left: 10px;
    margin-right: 10px;
}
.select1{
    margin-left: 320%;
    text-align: center;
    height: 40px;
    width: 150px;
}
#div2{
    text-align: center;
    font-size: 50px;
    margin-top: 25px;
    margin-bottom: 10px;
    
}
#ty_pro{
    font-size: 20px;
    text-align: center;   
}
.tab0{
    background-color: #CACDCE;
    padding: 10px;
}
table{
    width: 800px;
    border:1px solid black;
    
}
h4:hover{
    color: blue;
}
h4:active{
    color: greenyellow;
}


</style>
</head><body><div class="content">
<div class="d">
<div id="div1"><a href="myhome.php"><h4>Home<h4></a></div>
<div><h4>|</h4></div>
<div id="div1"><a href="mypost.php"><h4>My Posts<h4></a></div>
</div>


<div class="d"><h1>Welcome to my blog!</h1></div>
<div class="d"><div><h2>Total Impression</h2></div>
<div><select class="select1">
    <option value="aa">This day</option>
    <option value="ab">This month</option>
    <option value="ac">This years</option>
</select></div>    
</div>


<div class="d">
<div style="width:300px;height:150px; border: 1px solid black">
    <div id="div2"><i class="fa fa-users"></i></div>';
echo"    <div id='ty_pro'><b> $visitor Visitors</b></div>";
echo'</div> 
<div style="width:300px;height:150px; border: 1px solid black; margin-left: 100px;margin-right:100px">
    <div id="div2"><i class="fa fa-thumbs-up"></i></div>';
echo"    <div id='ty_pro'><b>$like likes</b></div>";
echo'</div> 
<div style="width:300px; height:150px; border:1px solid black">
    <div id="div2"><i class="fa fa-thumbs-down"></i></div>';
echo"    <div id='ty_pro'><b>$dislike dislikes</b></div>";
echo'</div> 
</div>';

?>
<?php 
echo'
<div class="d"><h2>History of Visitors</h2></div>
<table>
    <tr class="tab0">
        <td>Time</td>
        <td>Visiting page</td>
        <td>Impression</td>
        <td>Visiting device</td>
    </tr>
   ';

foreach($visitorHistory as $visitorHistory1)
echo"<tr>
        <td>".$visitorHistory1['time']."</td>
        <td>".$visitorHistory1['visiting_page']."</td>
        <td>".$visitorHistory1['impression']."</td>
        <td>".$visitorHistory1['visiting_device']."</td>
    </tr>";
echo'</table>


</div></div></body></head>';
?>
