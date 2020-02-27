<?php
echo"
<html>
<head>
    <title>Document</title>
    <style>
        .a1{
            text-decoration: none;
            display: block;
        }
        .a1:hover{
            background-color: steelblue;
        }
        img{
            width: 150px;
            height: 150px;
            float: left;
        }
        div{
            border: 3px solid black;
            padding: 5px;
        }
        .overflow{
            overflow: auto;
        }
    </style>
</head>
<body style='width: 50%; border: 1px solid black; padding: 20px;'>
    <a href='ex1.php'>Home</a>    |    <a href='ex2.php'>My Posts</a><br><br>
    <p>
        <h2 style='display: inline;'><a href=''>Drafting Post</a></h2>
    <span style='float: right;border: 1px solid black; height: 20px;width: 150px;text-align: center;background-color: darkcyan;'><a href='' class='a1'>Create new post</a></span>
    </p><br>
    <div class='overflow'>
        <img src='maxresdefault.jpg' alt=''>My name is JongKook <br> Nature, in the broadest sense, is the natural, physical, or material world or universe. Nature can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.
        <br><br><span style='float: right;'>Saved 3hour ago</span>
    </div><br>
    <div class='overflow'>
        <img src='unnamed.jpg' alt=''>My name is V <br> Nature, in the broadest sense, is the natural, physical, or material world or universe. Nature can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.
        <br><br><span style='float: right;'>Saved 1hour ago</span>
    </div><br>
    <h2><a href=''>Public Posts</a></h2><br>
    <div class='overflow'>
        <img src='mqdefault.jpg' alt=''>My name is Krern <br> Nature, in the broadest sense, is the natural, physical, or material world or universe. Nature can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.
        <br><br><span style='float: right;'>Public 3hour ago</span>
    </div><br>
    <div class='overflow'>
        <img src='download.jfif' alt=''>My name is Pekmi <br> Nature, in the broadest sense, is the natural, physical, or material world or universe. Nature can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.
        <br><br><span style='float: right;'>Public 1hour ago</span>
    </div>
</body>
</html>
"
?>