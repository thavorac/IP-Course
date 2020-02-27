<?php
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
                <br><span style = 'padding-left: 25%'>390 Visitors</span>
        </div>
        <div class='box'>
            <img src='like.png' atl='like' style='width:50px; padding-left: 35%;'>
                <br><span style = 'padding-left: 28%'>28 likes</span>
        </div>
        <div class='box'>
            <img src='dislike.png' atl='dislike' style='width:50px; padding-left: 35%;'>
                <br><span style = 'padding-left: 26%'>12 dislikes</span>
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
            <td>Yesterday 3pm</td>
            <td>Home page</td>
            <td>Good</td>
            <td>Chrome</td>  
        </tr>
        <tr>
            <td>Yesterday 5pm</td>
            <td>Post1</td>
            <td>Good</td>
            <td>Ipad</td>  
        </tr>
        <tr>
            <td>Today 7pm</td>
            <td>Post2</td>
            <td></td>
            <td>Fire Fox</td>  
        </tr>
    </table>
    
    "

?>

