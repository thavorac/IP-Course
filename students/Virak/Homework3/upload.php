<?php
    include ('connection.php');

    $j = 0;     // Variable for indexing uploaded image.
    //Image 
    $image_name= array();
    $image_content_name = array();
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        // Loop to get individual element from the array
        $target_path = "uploads/";   // Declaring Path for uploaded images.
        $validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
        $ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
        $file_extension = end($ext); // Store extensions in the variable.
        $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
        $j = $j + 1;      // Increment the number of uploaded images according to the files in array.
        if (($_FILES["file"]["size"][$i] < 10000000)     // Approx. 10000kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
                // If file moved to uploads folder.
                // echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
                
                array_push($image_name, $target_path);
                // print_r($image_name);
                
            } else {     //  If File Was Not Moved.
                // echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {     //   If File Size And File Type Was Incorrect.
            // echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
    //Insert image to table
    // $image_name;
    $id_post = 0;
    $post_id = run_query("select max(id) from post");
    // var_dump($post_id);
    foreach($post_id as $p):
        $id_post = $p['max(id)'];
    endforeach;
    for($i=0; $i<count($image_name); $i++){
        $insert = 'insert into images(imgUrl,id) values(
            "'.$image_name[$i].'", "'.$id_post.'"
        )';
        $a = run_query($insert);
    }
  

    //Image content
    for ($i = 0; $i < count($_FILES['imgfile']['name']); $i++) {
        // Loop to get individual element from the array
        $target_path = "uploads/";  
        $validextensions = array("jpeg", "jpg", "png");     
         // Extensions which are allowed.
        $ext = explode('.', basename($_FILES['imgfile']['name'][$i]));   // Explode file name from dot(.)
        $file_extension = end($ext); // Store extensions in the variable.
        $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
        $j = $j + 1;      // Increment the number of uploaded images according to the files in array.
        if (($_FILES["imgfile"]["size"][$i] < 10000000)     // Approx. 10000kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['imgfile']['tmp_name'][$i], $target_path)) {
                // If file moved to uploads folder.
                // echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
                array_push($image_content_name, $target_path);
                // print_r($image_content_name);
            } else {     //  If File Was Not Moved.
                // echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {     //   If File Size And File Type Was Incorrect.
            // echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
        //Insert image to table
    // $image_name;
    $id_post = 0;
    $post_id = run_query("select max(id) from post");
    // var_dump($post_id);
    foreach($post_id as $p):
        $id_post = $p['max(id)'];
    endforeach;
    for($i=0; $i<count($image_content_name); $i++){
        $insert = 'insert into images_content(id,image_url) values(
            "'.$id_post.'","'.$image_content_name[$i].'"
        )';
        $a = run_query($insert);
    }
    


   

?>