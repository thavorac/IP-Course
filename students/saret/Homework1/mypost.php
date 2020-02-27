<style>
.wrap-all {
    
    border: 1px solid black;
    width: 100%;
    
    }
table  {
    border: 2px solid gray;
    
     
}
td{
    border-left:2px solid gray;

}
select {
    float: right;

}

#row1 {
    background: white;
}
#row2 {
    background: rgba(114, 182, 100, 0.719);
}
#row3 {
    background: white;
}
#row4 {
    background: rgb(166, 180, 167);
}

ul{
    list-style-type:none;
    width: 90%;
    margin: 0 auto;

    
}
li{
    float:left;
    width: 20%;
    height: 50px;
    border:1px solid gray;
    margin-left:20px;
    text-align:center;
}
</style>
<?php
    echo '
        <!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="C:\wamp64\www\learnphp\css\all.min.css">
<body>
    <div class="wrap-all">
            <p>Home | <a href="homework1.php" >My Post</a>
            <h3> Welcome to my blog! </h3>
            
            <select>
            <option> This month </option>
            <option> Last month </option>
            </select>
            <p> Total impression </p>


            <ul>
                <li>
                    <i class="fa fa-users"></i><br>
                    390 Visitors
                
                </li>
                <li>
                    <i class="fa fa-thumbs-up"></i><br>
                    28 Likes
                    
                </li>
                <li>
                    <i class="fa fa-thumbs-down"></i> <br>
                    12 Dislike

                </li>
            </ul>

            <br>
            <br>

            <p> Visitor\'s history </p>
            
            <table cellspacing="0" width="100%">
                <tr id="row1">
                <td>Time</td>
                <td>Visiting page</td>
                <td>Impression</td>
                <td>Visiting device</td>
                </tr>
                <tr id="row2">
                <td>Yesterday 3pm</td>
                <td>Homepage</td>
                <td>good</td>
                <td>Chrome</td>
                </tr>
                <tr id="row3">
                <td>Yesterday 5pm</td>
                <td>Post 1</td>
                <td>good</td>
                <td>iPad</td>
                </tr>
                <tr id="row4">
                <td>Today 7am</td>
                <td>Post 2</td>
                <td></td>
                <td>Firefox</td>
                </tr>
            </table>
    </div>
  </body>
  </html> 
    ';
?>