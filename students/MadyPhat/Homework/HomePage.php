<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style>
            th{
                text-align: left;
            }
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            div{
            border: 1px solid black;
            background-color: Pink;
            padding: 10px;
            }

            .Impression{
                border: none;
            }

            h3{
                display: inline-block;
            }

            form{
                margin-top: 20px;
                float: right;
            }
            ul {
                list-style-type: none;
            }
            ul li{
                float: left;
                margin: 30px;
                padding: 30px;
            }
        </style>
    </head>
    <body>
        <a href="url">Home</a>
        <h1>Welcome to my blog!</h1>
        
        <div class="Impression">
            <h3>Total Impression</h3>
            <form>
                <select name="Option" id="Option">
                    <option value="This month">This Month</option>
                    <option value="Last month">Last Month</option>
                </select>
            </form>
        </div>

        <?php
    
            $visitor=90;
            $like=70;
            $dislike=10;
            $visitorHistoies = array(
                array ("time" => "Yesterday 3am", "visiting page" => "Home page", "impression" => "Good", "visiting device"=>"Chrome"),
                array ("time" => "Yesterday 5am", "visiting page" => "Post1", "impression" => "Good", "visiting device"=>"ipad"),
                array ("time" => "Today", "visiting page" => "Post2", "impression" => "", "visiting device"=>"firefox"),
            )
            
        ?>
        <?php
        echo"
        <div><ul>
            <li><div style='padding:20px;'><img src='visitor.png' alt= '' width='40px' height='40px'><br>$visitor visitors</div></li>
            <li><div style='padding:20px;'><img src='like.png' alt='' width='40px' height='40px'><br>$like likes</div></li>
            <li><div style='padding:20px;'><img src='dislike.png' alt='' width='40px' height='40px'><br>$dislike dislikes</div></li>
            </ul>
        </div>
        "
        ?>
        <table class='table1'>
            <tr>
                <th>Time</th>
                <th>Visiting page</th>
                <th>Impression</th>
                <th>Visiting device</th>
        </tr>
        <?php

        echo"
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> 
        ";
        foreach($visitorHistoies as $visitorHistory)
        echo"
        <tr>
        <td>".$visitorHistory['time']."</td>
        <td>".$visitorHistory['visiting page']."</td>
        <td>".$visitorHistory['impression']."</td>
        <td>".$visitorHistory['visiting device']."</td>
        </tr>
        "
        ?>
        </table>
    </body>
</html>