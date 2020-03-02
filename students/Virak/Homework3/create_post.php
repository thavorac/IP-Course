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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <button><a href="home.php">Back</a></button><br>
        <div class="form">
            <form method="POST">
                Username: <br>
                <input type="text" name="username"><br>
                Post text: <br>
                <textarea name="text" id="" cols="30" rows="10"></textarea>
                <br>
                <button type="submit">Post</button>
            </form>
        </div>
    </div>
</body>
</html>