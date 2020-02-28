<?php
$visitors = 390;
$likes = 28;
$dislike = 12;
$visitorHistories= array(
    array("time"=>"yesterday 3pm","visiting page"=>"homepage","impression"=>"good","visiting device"=>"chrome"),
    array("time"=>"yesterday 5pm","visiting page"=>"page 1","impression"=>"good","visiting device"=>"ipone"),
    array("time"=>"today 7am","visiting page"=>"page 2","impression"=>"","visiting device"=>"firefox"),
)

?>

     <html>
     <style>
     table, th, td {
       border: 1px solid black;
     }
     ul{
         list-style-type : none;
     }
     ul li{
          float: left;
          border: 1px solid black;
          width: 100px;
          text-align: center;
          margin:44px;
     }        .table1{
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
     <body style='border: 1px solid black; width: 50%; padding: 20px;'>
     Home
      | 
     <a href ='http://127.0.0.1/practice/mypost.php'>My posts</a>
     <br><h2>Welcome to my blog!</h2></br>
     <br><b>Total impression</b></br>
    <span style='float:right;'>
        <select name='' id='' style='border: 3px solid black;'>
            <option value=''>This Month</option>
            <option value=''>Last Month</option>
            <option value=''>2 Month ago</option>
            <option value=''>3 Month ago</option>
        </select>
    </span>
    <?php
    echo"
    <div><ul>
        <li><div><img src='visitor.png' alt= '' style='width: 30px; height: 30px; padding:7px;'><br>$visitors</div></li>
        <li><div><img src='like.jpg' alt='' style='width: 30px; height: 30px; padding:7px;'><br>$likes</div></li>
        <li><div><img src='dislike.png' alt='' style='width: 30px; height: 30px; padding:5px;'><br>$dislike</div></li>
        </ul>
    </div>
    "
    ?>
     <br><b>Visitor's history</b></br>
     <table><tr style='border-top: 2px solid black; background-color: darkgrey;'>
        
        <td>Time</td>
         <td>Visiting page</td>
         <td>Impression</td>
         <td>visiting device</td>
        
    </tr>
    <?php
    foreach($visitorHistories as $visitorHistory)
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
     </body></html>