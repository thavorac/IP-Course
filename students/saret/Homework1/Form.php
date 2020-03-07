

    

<?php
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        for ($i=0;$i<count($file_tmp);$i++) {
        move_uploaded_file($file_tmp[$i], "Uploads/".$file_name[$i]);
        echo"Success";
        }    
    } else {
        echo"Error: file is required";}
?>

