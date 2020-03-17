<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Post information</legend>
                <div class="row">
                    <div class="form-group col-md-3">
                        <h4>Title</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <h4>Content</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <textarea class="form-control" name="content" id="content" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <h4>Image</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row col-md-12">
                            <div id="filediv"><input name="file[]" type="file" id="file" /></div>

                            <input type="button" id="add_more" class="upload col-md-12 btn btn-success"
                                value="More Image" />

                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <h4>Image content</h4>
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row col-md-12">
                            <div id="imgdev"><input name="imgfile[]" type="file" id="img" /></div>

                            <input type="button" id="add_more_img" class="upload col-md-12 btn btn-success"
                                value="More Image" />
                        </div>
                    </div>
                </div>
            </fieldset>
            <a  class="btn btn-info" href="mypost.php">Cancel</a>

            <input type="submit" name="save" value="Save" id="save" class="btn btn-success float-right mr-2">
            <input type="submit" name="save_" value="Upload" id="save_" class="btn btn-success float-right mr-2">


        </form>

        <?php include('upload.php') ?>

    </div>
</body>
<script>
    $(document).ready(function () {
        $("#save").on('click', function () {

            var save = $('#save').val();
            var title = $('#title').val();
            var content = $('#content').val();
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    title: title,
                    content: content,
                    save: save
                },
                success: function (data) {
                    alert("Data saved.");


                }
            })
        });

        //Upload click

        $("#save_").on('click', function () {//upload btn

            var upload = $('#save_').val();
            var title = $('#title').val();
            var content = $('#content').val();
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    title: title,
                    content: content,
                    upload: upload
                },
                success: function (data) {
                    alert("Data published.");
                    alert(data);

                }
            })
        });
    });

</script>

</html>