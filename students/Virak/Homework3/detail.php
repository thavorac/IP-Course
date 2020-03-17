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

    // $post_ID = intval($_GET['id']);
    $post_ID = $_GET['id'];

    $src_image = "";

?>
<?php 
//Select post where id = $post_ID and image from table image_content.
$tb_post = run_query("select * from post where id = $post_ID "); 
$img_random = run_query("select * from images_content where id = $post_ID order by rand() LIMIT 1");

        foreach($img_random as $img):
            $src_image = $img['image_url']; 
        endforeach; 
?> 
<?php 
//Test the post is uploaded or save// if isUpload = 1 so the post is uploaded else saved.
    $isUpload = "0";
    $timeSave = "0";
    $test_post = run_query("select * from post where id = $post_ID "); 
    foreach($test_post as $t):
        $isUpload = $t['status']; 
        $timeSave = $t['created_at'];
    endforeach; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    .image_content{
        width: 100%;
        height: 300px;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .down{
        margin-top: 30px;
        margin-bottom: 30px;
    }
    </style>
</head>
<body>
    <div class="container">
    <br><br>
    <h3><a href="index.php">Home</a> | My Post</h3>

        <h3>Drafting Posts </h3>
        <br>
        <h4 class="text-success">
            <?php foreach($tb_post as $p): echo "<b>"; echo $p['title']; echo "</b>"; endforeach; ?>
        </h4>
        <img class="image_content" src="<?php  echo $src_image; ?>" alt="" srcset="">
        <div class="content">
            <?php foreach($tb_post as $p): echo $p['content']; endforeach; ?>
        </div>
        <div class="timestamp">
            <div class="float-right">
                <?php 
                    $timeSave = date_create($timeSave);
                    $time = date_format($timeSave,"Y/m/d H:i:s");
                    echo $isUpload ? "Published at $time" : "Saved at $time";   
                ?>
            </div>
        </div>
        <br>


        <div class="down">
            <input type="hidden" name="post_id" id = "post_id" value="<?php echo $post_ID ?>">
            <a class="btn btn-primary" href="create_post.php">Create New Post</a>
                <?php
                if($isUpload){
                
                    echo '<button type = "submit" class="btn btn-danger float-right" id="unpublish" href="">Unpublish</button>';
                }else{
                    echo '<a class="btn btn-success float-right" id="publish" href="">Publish</a>';
                }
            ?>
        </div>
    </div>

</body> 

<script>
    $(document).ready(function () {
        $("#unpublish").on('click', function () {

            var post_id = $('#post_id').val();
            var action = "unpublish";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    post_id: post_id, action
                },
                success: function (data) {
                    alert(data);


                }
            })
        });

        //Publish click

        $("#publish").on('click', function () {//upload btn

            var post_id = $('#post_id').val();
            var action = "publish";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    post_id: post_id, action
                },
                success: function (data) {
                    alert(data);

                }
            })
        });
    });

</script>
</html>