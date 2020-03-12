<?php
    if(isset($_FILES['image'])){
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];
        
        move_uploaded_file($file_tmp,'uploads/'.$file_name);
        echo"Success";
    }
    else{
        echo"ERROR";
    }

?>