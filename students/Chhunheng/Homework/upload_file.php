<?php
 $uploadStatus=1;
    if(isset($POST['submit'])){
        $check=getimagesize($_FILES['fileToUpload']['tmp_name']);
        if($check !==false){
            echo "File is an image -" . $check["mime"].".";
            $uploadStatus=1;
        }else{
            echo "File is not an image.";
            $uploadStatus=0;
        }
    }

    if(isset($_FILES['fileToUpload'])){
        $file_dir="uploads/image_avatars/";
        // $error=array();
        $file_name=$_FILES['fileToUpload']['name'];
        $file_size=$_FILES['fileToUpload']['size'];
        $file_tmp=$_FILES['fileToUpload']['tmp_name'];
        $file_type=$_FILES['fileToUpload']['type'];
        // $file_ext=strtolower(end(explode('.',$file_name)));
       


        //check file size
        // if($file_size>2097152){
        //     echo "Sorry, your file is too large.";
        //     $uploadStatus=0;
        // }
        
        //  allow certain file formats
        // $extensions=array('png','jpg','gif','jpeg');
        // foreach($extensions as $extension){
        //     if($file_ext!==$extension){
        //         echo "Sorry, only JPG,JPEG,PNG and GIF files extension are allow";
        //         $uploadStatus=0;
        //     }
        // }
        // if($uploadStatus==1){
            move_uploaded_file($file_tmp,$file_dir . $file_name);
            echo "Uploaded";
        // }
        // else{
        //     echo "Not uploaded";
        // }

    }
   

    // $target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadStatus=1;

    // $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // //Check if image file is a actual image or fake image

    

    //check if file already exists
    // if(file_exists($target_file)){
    //     echo "Sorry, file already exist.";
    //     $uploadStatus=0;
    // }

    

    
    

    
    if(isset($_FILES['fileToUpload1'])){
        $file_dir="uploads/image_contents/";
        $file_name=$_FILES['fileToUpload1']['name'];

        $file_tmp=$_FILES['fileToUpload1']['tmp_name'];
        echo $file_name;//59579082_2127153680734982_8323098564641161216_n.jpg
        echo $file_tmp;//C:\wamp64\tmp\phpEFE1.tmp
        move_uploaded_file($file_tmp,$file_dir . $file_name);
        echo "Uploaded";


    }


?>