<?php
    $visitor= 100;
    $like= 20;
    $dislike= 10;
    $visitorHistory = array(
        "row1" => array(
            'time'=> "Yesterday 3pm", 
            'visiting_page' => "Home page",
            'impression' => "Good", 
            'visiting_device' => 'Chrome'
        ),
        "row2" => array(
            'time'=> "Yesterday 5pm", 
            'visiting_page' => "Post 1", 
            'impression' =>"Good", 
            'visiting_device' => "iPad"
        ),
        "row3" => array(
            "time"=> "Today 7am", 
            "visiting_page" => "Post 2", 
            "impression" => null,
            "visiting_device" => "Firefox"
        )
    );

    echo"
        <head>
            <title>Home Page</title>
        </head>
        <style>
        a:link {
        color: blue;
        text-decoration: underline;
        }

        /* visited link */
        a:visited {
        color: blue;
        }

        /* mouse over link */
        a:hover {
        color: hotpink;
        text-decoration: underline;
        }

        /* selected link */
        a:active {
        color: black;
        }
        div.box{
            width:180px; 
            height:100px; 
            border:solid; 
            display: inline-block; 
            margin:10px;
        } 
        h1,h2{
            font-family: arial, sans-serif;
            text-style: bold;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 33%;
          }
          
          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }
          
          tr:nth-child(even) {
            background-color: #dddddd;
          }
        </style>
    <body>

        <h2>Home <span style = 'display: inline; border-left-style:solid;'><a href='myPost.php' style='padding-left:5px;'>My Post</a></span></h2>
        <h1>Welcome to My Blog!</h1>
        <br>

        <div>
            <h2 style = 'display: inline-block;'>Total Impression</h2>
            <select style = 'display: inline-block; margin-left: 300px'>
                <option value='thisMonth'>This Month</option>
            </select>
        </div>
        <br>
        <div>
            <div class='box'>
                <img src='visitor.png' atl='visitor' style='width:50px; padding-left: 35%;'>
        
                    <br><span style = 'padding-left: 25%'>$visitor Visitors</span>
            </div>
            <div class='box'>
                <img src='like.png' atl='like' style='width:50px; padding-left: 35%;'>
                    <br><span style = 'padding-left: 28%'>$like likes</span>
            </div>
            <div class='box'>
                <img src='dislike.png' atl='dislike' style='width:50px; padding-left: 35%;'>
                    <br><span style = 'padding-left: 26%'>$dislike dislikes</span>
            </div>
        </div>
        <br>
        <h2>Visitor's history</h2>
        <br>
        <table>
            <tr>
                <th>Time</th>
                <th>Visit page</th>
                <th>Impression</th>
                <th>Visiting device</th>
            </tr>
            <tr>
        ";
                echo "<td>".$visitorHistory['row1']['time']."</td>";
                echo "<td>".$visitorHistory['row1']['visiting_page']."</td>";
                echo "<td>".$visitorHistory['row1']['impression']."</td>";
                echo "<td>".$visitorHistory['row1']['visiting_device']."</td>";
                
        echo"
            </tr>
            <tr>
            ";
            echo "<td>".$visitorHistory['row2']['time']."</td>";
            echo "<td>".$visitorHistory['row2']['visiting_page']."</td>";
            echo "<td>".$visitorHistory['row2']['impression']."</td>";
            echo "<td>".$visitorHistory['row2']['visiting_device']."</td>";
        echo"
            </tr>
            <tr>
            ";
            echo "<td>".$visitorHistory['row3']['time']."</td>";
            echo "<td>".$visitorHistory['row3']['visiting_page']."</td>";
            echo "<td>".$visitorHistory['row3']['impression']."</td>";
            echo "<td>".$visitorHistory['row3']['visiting_device']."</td>";
        echo"
            </tr>
        </table>
    </body>
    
    "

?>

