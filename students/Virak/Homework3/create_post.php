<?php include "connection.php"; ?>
<?php


if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $text = $_POST['text'];

    $insert = "insert into post(username,text) values(
            '{$username}', '{$text}'
        )";

    $i = run_query($insert);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
    <h3><a href="home.php">Home</a> | My Post</h3>

    <b>Create new posts </b>
    <hr>
        
        <form action="" method="POST" enctype="multipart/form-data"  >
            <fieldset>
                <legend >Post information</legend>
                <div class="row">
                    <div class="form-group col-md-3">
                        Title
                    </div>
                    <div class="form-group col-md-9">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        Content
                    </div>
                    <div class="form-group col-md-9">
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        Image
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row">
                            <div id="filediv"><input name="file[]" type="file" id="file" /></div>
                            
                            <input type="button" id="add_more" class="upload col-md-12 btn btn-success" value="Add More Image" />
                            
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        Image content
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row">
                            <div id="imgdev"><input name="file[]" type="file" id="imgfile" /></div>
                            
                            <input type="button" id="add_more_img" class="upload col-md-12 btn btn-success" value="Add More Image" />
                        </div>
                    </div>
                </div>
            </fieldset>
            <button class="btn btn-info"><a href="home.php">Cancel</a></button>
            <button type="submit" class="btn btn-success float-right mr-2">Save & Publish</button>
           
        
        </form>


        
    </div>
</body>
<script>
    function uploadSrc() {
        $('#imgupload').trigger('click');
        alert("Hello");
    }
</script>
</html>

<?php
if (isset($_POST['username'])) {
    $j = 0;     // Variable for indexing uploaded image.
    $target_path = "uploads/";     // Declaring Path for uploaded images.
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        // Loop to get individual element from the array
        $validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
        $ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
        $file_extension = end($ext); // Store extensions in the variable.
        $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
        $j = $j + 1;      // Increment the number of uploaded images according to the files in array.
        if (($_FILES["file"]["size"][$i] < 10000000)     // Approx. 10000kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
                // If file moved to uploads folder.
                echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
            } else {     //  If File Was Not Moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {     //   If File Size And File Type Was Incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
}

?>