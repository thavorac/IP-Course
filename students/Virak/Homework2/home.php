<?php
    $visitor_impress = array("Save 3 hours ago", "Save Yesterday", "Save 3 hours ago","Save Yesterday");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">

    <h3><a href="mypost.php">Home</a> | <a href="home.php">My Post</a></h3>
        <p><b>Drafting Posts </b><button>Create New Post</button></p>
        

        <br>

        <div class="post">
            <i class="fa fa-user" style="color: aqua; border: 2px solid gray;font-size: 90px; float: left; padding:0px 20px 0px;margin-right: 10px;"></i>
            <b>User name</b><br>
            Lorem praesentium facilis, soluta doloribus, reprehenderit expedita, tenetur nemo nostrum exercitationem explicabo sint accusantium eius eum libero? Aperiam non pariatur magnam. Debitis, laudantium vel. Corporis, voluptatibus recusandae! Doloremque quasi voluptate earum error saepe hic, quae, rem at vel nihil facere.
            <br>
            <div class="time"> <?php echo $visitor_impress[0] ?></div>
        </div>
        <div class="post">
            <i class="fa fa-user" style="color: rgb(0, 162, 255); border: 2px solid gray;font-size: 90px; float: left; padding:0px 20px 0px;margin-right: 10px;"></i>
            <b>User name</b><br>
            Lorem praesentium facilis, soluta doloribus, reprehenderit expedita, tenetur nemo nostrum exercitationem explicabo sint accusantium eius eum libero? Aperiam non pariatur magnam. Debitis, laudantium vel. Corporis, voluptatibus recusandae! Doloremque quasi voluptate earum error saepe hic, quae, rem at vel nihil facere.
            <br>
            <div class="time"><?php echo $visitor_impress[1] ?></div>
        </div>

        <p><b>Publish Posts </b></p>

        <div class="post">
            <i class="fa fa-user" style="color: rgb(225, 0, 255); border: 2px solid gray;font-size: 90px; float: left; padding:0px 20px 0px;margin-right: 10px;"></i>
            <b>User name</b><br>
            Lorem praesentium facilis, soluta doloribus, reprehenderit expedita, tenetur nemo nostrum exercitationem explicabo sint accusantium eius eum libero? Aperiam non pariatur magnam. Debitis, laudantium vel. Corporis, voluptatibus recusandae! Doloremque quasi voluptate earum error saepe hic, quae, rem at vel nihil facere.
            <br>
            <div class="time"><?php echo $visitor_impress[2] ?></div>
        </div>
        <div class="post">
            <i class="fa fa-user" style="color: rgb(0, 255, 34); border: 2px solid gray;font-size: 90px; float: left; padding:0px 20px 0px;margin-right: 10px;"></i>
            <b>User name</b><br>
            Lorem praesentium facilis, soluta doloribus, reprehenderit expedita, tenetur nemo nostrum exercitationem explicabo sint accusantium eius eum libero? Aperiam non pariatur magnam. Debitis, laudantium vel. Corporis, voluptatibus recusandae! Doloremque quasi voluptate earum error saepe hic, quae, rem at vel nihil facere.
            <br>
            <div class="time"><?php echo $visitor_impress[3] ?></div>
        </div>
  

  

    </div>
</body> 
</html>