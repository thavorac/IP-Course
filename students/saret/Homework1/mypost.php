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
    $visitor = 90;
    $like = 70;
    $dislike = 10;
    $visitorHistories = array (
        array("time"=>"Yesterday 3pm","visit_page"=>"Homepage","impression"=>"good","visit_device"=>"Chrome"),
        array("time"=>"Yesterday 5pm","visit_page"=>"Post 1","impression"=>"good","visit_device"=>"iPad"),
        array("time"=>"Yesterday 7pm","visit_page"=>"Post 2","impression"=>"","visit_device"=>"Firefox"),
    )
    ?>
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
        ';
           
               echo  "$visitor Visitors";
            
              
              echo'  </li>
                <li>
                    <i class="fa fa-thumbs-up"></i><br>
                    ';
                    
                  echo "$like Likes";
                
                    
               
               echo' </li>
                <li>
                    <i class="fa fa-thumbs-down"></i> <br>
                    ';
                
                   echo "$dislike Dislikes";
                

             echo"   </li>
            </ul>

            <br>
            <br>

            <p> Visitor's history </p> ";
            foreach($visitorHistories as $visitorHistory)
            echo " <table>
            <tr>
                <th>Time</th>
                <th>Visiting page</th>
                <th>Impression</th>
                <th>Visiting Device</th>
            </tr>
            <tr>
            
                <td>".$visitorHistory['time']." </td>
                <td>".$visitorHistory['visit_page']." </td>
                <td>".$visitorHistory['impression']."</td>
                <td>".$visitorHistory['visit_device']."</td>
            </tr>
                    </table>";
   echo " </div>
  </body>
  </html> ";

?>