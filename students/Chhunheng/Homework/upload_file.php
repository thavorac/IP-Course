<?php
    $target_dir="uploads/";
    $target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadStatus=1;

    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_ENTENSION));
    
    //Check if image file is a actual image or fake image

    if(isset($POST['submit'])){
        $check=getimagesize($_FILES['fileToUpload']['tmp_naem']);
        if($check !==false){
            echo "File is an image -" . $check["mime"].".";
             $uploadStatus=1;
        }else{
            echo "File is not an image.";
            $uploadStatus=0;
        }
    }

    //check if file already exists
    if(file_exists($target_file)){
        echo "Sorry, file already exist.";
        $uploadStatus=0;
    }

    //check file size
    if($_FILES['fileToUpload']['size']>500000){
        echo "Sorry, your file is too large.";
        $uploadStatus=0;
    }

    //  allow certain file formats
    if($imageFileType=="jpg"||$imageFileType=="png"||$imageFileType=="jpeg"||$imageFileType=="gif"){
        echo "Sorry, only JPG,JPEG,PNG $GIF files extension are allow";
        $uploadStatus=0;
    }

    //Dicision upload file
    if($uploadStatus==0){
        echo "Sorry, your file was not upload.";
    }else{
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
            echo "The file ".basename($_FILES['fileToUpload']['name']). "has been uploaded.";
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }


?>