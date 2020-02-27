<?php
    echo"
    <html>
    <head>
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
        h1,h2{
            font-family: arial, sans-serif;
            text-style: bold;
        }
        div.postBox{
            font-family: arial, sans-serif;
            position: relative;
            width: 600px;
            height: 160px;
            border: 1px solid green;
            padding: 15px;
            margin: 20px;
        }   
        p.foo {
            font-family: arial, sans-serif;
            position: absolute;
            bottom: 10;
            right: 20;
          } 
    </style>
    </head>
    <body>
        <h2 style = 'display: inline-block;'><a href='homePage.php' style='padding-right:5px;'>Home</a></h2><h2 style = 'display: inline; border-left-style:solid; padding-left:5px;'>My Post</h2>
        <div>
        <h1 style = 'display: inline-block;'><u>Drafting Posts</u></h1>
        <button style = 'display: inline-block; margin-left: 250px; width:180px; height:30px;'>Create New Posts</button>
        </div>
        <br>
        <div class='postBox'>
            <img src='person.png' alt='photo1' style='width:140px; height:auto; float:left; margin:10px; border: 1px solid green;'>
            <p>My name is Scott Chow, and I am going to show you how to start blogging. I have been building blogs and websites since 2002.</p>
            <p class='foo'><b>Saved 3hours ago</b></p>
        </div>
        <div class='postBox'>
        <img src='p3.png' alt='photo1' style='width:140px; height:auto; float:left; margin:10px; border: 1px solid green;'>
        <p>I am not ashamed to admit that when I was first learning how to build a blog I made a ton of mistakes. You can benefit from more than a decade of my experience so that you don’t repeat these same mistakes when you make your own blog.</p>
        <p class='foo'><b>Saved Yesterday 9pm</b></p>
        </div>
        <h2><u>Pulished Post</u></h2>
        <div class='postBox'>
        <img src='p2.jpg' alt='photo1' style='width:140px; height:auto; float:left; margin:10px; border: 1px solid green;'>
        <p>Bloggers often write from a personal perspective that allows them to connect directly with their readers. In addition, most blogs also have a “comments” section where readers can correspond with the blogger. </p>
        <p class='foo'><b>Published 3hours ago</b></p>
        </div>
        <div class='postBox'>
        <img src='p1.png' alt='photo1' style='width:140px; height:auto; float:left; margin:10px; border: 1px solid green;'>
        <p>This direct connection to the reader is one of the main benefits of starting a blog. This connection allows you to interact and share ideas with other like-minded people. It also allows you to build trust with your readers. </p>
        <p class='foo'><b>Published Yesterday 9pm</b></p>
        </div>
    </body>
    </html>

    "
    

?>