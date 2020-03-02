<?php
    include "connection.php";

    $visiting_page=explode("/",$_SERVER['PHP_SELF']);
    $page=explode(".", $visiting_page[count($visiting_page)-1]);
    $visiting_device=explode("/",$_SERVER['HTTP_USER_AGENT']);
    $device=$visiting_device[0];
    
    $insert = "insert into visitor_histories(time,visiting_page,impress,visitor_device) values(
        current_timestamp,'{$page[0]}','Good', '{$device}'
        )";

    $i = run_query($insert);
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

    <h3>Home</a> | <a href="mypost.php">My Post</a></h3>

        <b>Drafting Posts </b>
        <button>
        <a href="create_post.php">Create New Post</a>
        </button>

        

        <br>

        <?php $tb_post = run_query("select * from post"); ?>
        <?php foreach($tb_post as $p): ?>
            <div class="post">
                <i class="fa fa-user" style="color: aqua; border: 2px solid gray;font-size: 90px; float: left; padding:0px 20px 0px;margin-right: 10px;"></i>
                <b><?php echo $p['username']; ?></b><br>
                    <?php echo $p['text']; ?>
                <br>
                <div class="time"> <?php echo $p['created_at']; ?></div>
            </div>
        <?php endforeach; ?>
  

  

    </div>
</body> 
</html>