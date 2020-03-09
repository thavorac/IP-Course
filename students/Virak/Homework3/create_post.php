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
    <script src="script2.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <br><br>
    <h3><a href="index.php">Home</a> | My Post</h3>

    <b>Create new posts </b>
    <hr>
        
        <form action="" method="POST" enctype="multipart/form-data"  >
            <fieldset>
                <legend >Post information</legend>
                <div class="row">
                    <div class="form-group col-md-3">
                        <h4>Title</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <h4>Content</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <h4>Image</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row col-md-12">
                            <div id="filediv"><input name="file[]" type="file" id="file" /></div>
                            
                            <input type="button" id="add_more" class="upload col-md-12 btn btn-success" value="More Image" />
                            
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <h4>Image content</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row col-md-12">
                            <div id="imgdev"><input name="imgfile[]" type="file" id="img" /></div>
                            
                            <input type="button" id="add_more_img" class="upload col-md-12 btn btn-success" value="More Image" />
                        </div>
                    </div>
                </div>
            </fieldset>
            <button class="btn btn-info"><a href="home.php">Cancel</a></button>
            <button type="submit" id="upload" name="submit" class="btn btn-success upload float-right mr-2">Save & Publish</button>
            
        
        </form>
        <?php include "upload.php"; ?>

        
    </div>
</body>
<script>
    function uploadSrc() {
        $('#imgupload').trigger('click');
        alert("Hello");
    }
</script>
</html>
