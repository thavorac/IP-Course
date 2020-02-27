<?php
echo"
     <html>
     <style>
     table, th, td {
       border: 1px solid black;
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
            <option value=''>This year</option>
            <option value=''>Last year</option>
        </select>
    </span>
    <div><ul>
        <li><div><img src='visitor.png' alt= '' style='width: 30px; height: 30px;'><br>390 Visitors</div></li>
        <li><div><img src='like.jpg' alt='' style='width: 30px; height: 30px;'><br>28 Likes</div></li>
        <li><div><img src='dislike.png' alt='' style='width: 30px; height: 30px;'><br>12 Dislikes</div></li>
        </ul>
    </div>
     <br><b>Visitor's history</b></br>
     <table><tr style='border-top: 2px solid black; background-color: darkgrey;'>
         <td>Time</td>
         <td>Visiting page</td>
         <td>Impression</td>
         <td>visiting device</td>
        
    </tr>
    <tr>
         <td>Yesterday 3pm</td>
         <td>Homepage</td>
         <td>Good</td>
         <td>Chrome</td>
    </tr>
    <tr>
     <td>Yesterday 5pm</td>
     <td>page1</td>
     <td>Good</td>
     <td>Iphone</td>
    </tr>
    <tr>
    <td>Today 7am</td>
    <td>page2</td>
    <td></td>
    <td>Firefox</td>
    </tr>
     </table>
     </body></html>
"
?>