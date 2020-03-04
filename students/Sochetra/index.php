<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<?php 
    $page = "Home Page";
    include_once "count.php";

?>
    <?php 

        $visitor = $conn->query("SELECT count(*) as total FROM visitors ");
        $like = 20;
        $dislike = 30;
        $history = $conn->query("SELECT * FROM visitors");
    ?>

    <table>  
        <tr>
            <td style="border-right: 1px solid black"><a href="./index.php">Home</a></td>
            <td><a href="./posts.php">My Posts</a></td>
        </tr>
    </table>
    
    <h2>Welcome to my blog!</h2>
    
    <table class="w-100">
        <tr>
            <td><h4>Total impressions</h4></td>
            <td class="select-month">
                <select name="" id="">
                    <option value="">This month</option>
                </select>
            </td>
        </tr>
    </table>

    <table class="stats w-100">
        <tr>
            <td>
                <i class="material-icons" style="font-size: 50px">supervisor_account</i><br>
                <?php echo mysqli_fetch_assoc($visitor)['total']; ?> Visitors
            </td>
            <td class="no-border"></td>
            <td>
                <i class="material-icons" style="font-size: 50px">thumb_up</i><br>
                <?php echo $like; ?> Likes
            </td>
            <td class="no-border"></td>
            <td>
                <i class="material-icons" style="font-size: 50px">thumb_down</i><br>
                <?php echo $dislike; ?> Dislikes
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
        <?php while($row = mysqli_fetch_assoc($history)) { ?>

            <tr class="history">
                <td class="history"><?php echo $row['time']; ?></td>
                <td class="history"><?php echo $row['page']; ?></td>
                <td class="history"><?php echo $row['impressionn']; ?></td>
                <td class="history"><?php echo $row['device']; ?></td>
            </tr>
            
        <?php } ?>
    </table>

</body>

</html>