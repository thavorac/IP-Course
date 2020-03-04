<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Posts</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<?php 
    $page = "Post Page";
    include_once "count.php";
?>
    <table>  
        <tr>
            <td style="border-right: 1px solid black"><a href="./index.php">Home</a></td>
            <td><a href="./posts.php">My Posts</a></td>
        </tr>
    </table>


</body>

</html>