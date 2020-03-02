<?php require 'insertdata.php';
    $visitor=90;
    $like=70;
    $dislike=10;
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="blogs";
     $conn=new mysqli($servername, $username, $password,$dbname);
    if($conn->connect_error){
        die ("Connection failed: ".$conn->connect_error);
    }
   
    $sql="select * from visitorhistories"; 
    $result = $conn->query($sql);
    

   

    $conn->close();

    
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
<style>
    a{
        font-size:20px;
    }
    #Month{
        
        float: right;
        width: 10%;
        height: 25px;
        display: inline;
    }
    body{
        margin-left: 5%;
        margin-right: 5%;
    }
    table{
        border-collapse: collapse;
        text-align: center;
    }
    table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
#htable{
    background-color: aqua;
}
th {
  height: 30px;
  color: white;
}
.col-sm-3{
    
     border: 2px solid #000000;
     margin: 0 auto ;
    text-align: center;
    
}

a:active {
    color: red;
  background-color: yellow;
}
a:visited {
            color: green;
        }
</style>
<title>My Poste</title>

</head>
<body>
    
<a href="homePage.php">Home</a>| <a href="postPage.php">My Posts</a><br><br><br>

    <h1>Welcome to my blog!</h1>
    <div class="impress">
       
        <select name="" id="Month">
            <option value="this month">This Month</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="November">November</option>
            <option value="December">December</option>
            
        </select> 
        <h3><b>Total Impression</b></h3>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <img src="group.svg" alt="" width="30%">
            <div class="description"><?php 
                echo $visitor;
            ?> Visitors</div>
        </div>
        <div class="col-sm-3">
            <img src="like.svg" alt="" width="30%">
            <div class="description"><?php 
                echo $like;
            ?>
                 Likes</div>
           </div>
        <div class="col-sm-3">
            <img src="hand.svg" alt="" width="30%">
            <div class="description">
            <?php 
                echo $dislike;
            ?> dislikes</div>
            </div>
        
      </div>
      <br><br>

    <h3>Visitor's history</h3>
    <table>
        <tr id="htable">
            <th>Time</th>
            <th>Visiting Page</th>
            <th>Impression</th>
            <th>Visting device</th>

        </tr>
        <?php
             
            if($result->num_rows>0){//num_rows for count row in table db.
                while($row = $result->fetch_assoc()) //transform to associative array
                {
                    echo " 
                    <tr>
                        <td>".$row['time']."</td>
                        <td>".$row['visiting_page']."</td>
                        <td>".$row['impression']."</td>
                        <td>".$row['visiting_device']."</td>
                    </tr>
                    ";
                }
                
            }
            else {
                echo "0 result";
            }
        ?>
      
    </table>
    

    
</body>
</html>
