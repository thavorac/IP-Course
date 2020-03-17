<?php

include ('connection.php');


if($_POST['save'] == "Save"){

    $title = $_POST["title"];
    $content = $_POST["content"];

    $insert = 'insert into post(title,content,status) values(
        "'.$title.'", "'.$content.'", 0
    )';
    $i = run_query($insert);

}
if($_POST['upload'] == "Upload"){

    $title = $_POST["title"];
    $content = $_POST["content"];

    $insert = 'insert into post(title,content,status) values(
        "'.$title.'", "'.$content.'", 1
    )';
    $i = run_query($insert);

}
if($_POST['action'] == "unpublish"){

    $upaded_at = date('Y-m-d H:i:s', time());
    $update = 'update post set status = 0, created_at = "'.$upaded_at.'" where id = "'.$_POST['post_id'].'"';
    $i = run_query($update);
    echo "The post is unplished  ";


}
if($_POST['action'] == "publish"){
    echo "unpublished  ";
    echo $_POST['post_id'];
    $upaded_at = date('Y-m-d H:i:s', time());
    $update = 'update post set status = 1, created_at = "'.$upaded_at.'" where id = "'.$_POST['post_id'].'"';
    $i = run_query($update);
    echo "The post is plished  ";

}


?>

