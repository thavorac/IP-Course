<?php
echo "
    <html>
    <style>
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
<body style='width: 50%; border: 1px solid black; padding: 20px;' >
    <a href ='http://127.0.0.1/practice/hw1.php'>Home</a>
    | 
    My posts
    <br><b><u><h3>Drafting Posts</h3></u></b></br>
    <p>
    <h2 style='display: inline;'><a href=''>Drafting Post</a></h2>
<span style='float: right;border: 1px solid black; height: 20px;width: 150px;text-align: center;background-color: darkcyan;'><a href='' class='a1'>Create new post</a></span>
</p><br>
<div class='overflow'>
    <img src='user.jpg' alt=''>A user is a person who utilizes a computer or network service. Users of computer systems and software products generally lack the technical expertise required to fully understand how they work.
    <br><br><br><br><br><span style='float: right;'>Saved 3hours ago</span>
</div><br>
<div class='overflow'>
    <img src='apple.jpg' alt=''>Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. It is considered one of the Big Four technology companies, alongside Amazon, Google, and Facebook.
    <br><br><br><span style='float: right;'>Saved yesterday 9pm ago</span>
</div><br>
<h2><a href=''>Public Posts</a></h2><br>
<div class='overflow'>
    <img src='android.jpg' alt=''>Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as smartphones and tablets
    <br><br><br><br><span style='float: right;'>Publiced 3hours ago</span>
</div><br>
<div class='overflow'>
    <img src='google.jpg' alt=''>Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware
    <br><br><br><br><span style='float: right;'>Publiced yesterday 9pm</span>
</div>
</body>

"
?>