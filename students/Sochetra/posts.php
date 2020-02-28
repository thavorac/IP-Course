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

        $visitor = 100;
        $like = 20;
        $dislike = 30;
        $history = array(
            array("Yesterday 3pm", "Homepage", "good", "Chrome"),
            array("Yesterday 5pm", "Post 1", "good", "Ipod"),
            array("Today 7pm", "Post 2", "", "Firefox")

        );
    ?>

    <table>  
        <tr>
            <td style="border-right: 1px solid black"><a href="./index.php">Home</a></td>
            <td><a href="./posts.php">My Posts</a></td>
        </tr>
    </table>

    <table class="w-100">
        <tr>
            <td><h4>Drafting Posts</h4></td>
            <td class="select-month">
                <a href="">Create New Post</a>
            </td>
        </tr>
    </table>

    <table class="stats w-100">
        <tr>
            <td style="width: 30%">
                <i class="material-icons" style="font-size: 50px">supervisor_account</i>
            </td>
            <td>
                <h3>Title</h3>
            </td>
        </tr>
    </table>
    
    <h3>Visitor's History</h3>
    
    <table class="history w-100">
        <tr class="history">
            <td class="history">Time</td>
            <td class="history">Visiting Page</td>
            <td class="history">Impression</td>
            <td class="history">Visiting Device</td>
        </tr>
        <?php foreach($history as $row) { ?>

            <tr class="history">
                <td class="history"><?php echo $row[0]; ?></td>
                <td class="history"><?php echo $row[1]; ?></td>
                <td class="history"><?php echo $row[2]; ?></td>
                <td class="history"><?php echo $row[3]; ?></td>
            </tr>
            
        <?php } ?>
    </table>

</body>

</html>