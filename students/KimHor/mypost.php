<?php

echo'<html>
    <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .content{
            max-width:500px;
            margin: auto;
        }
        h2{
            text-align: center;
        }
        .d{
            display: flex;
            margin-left: 20px;
        }
        .d1{
            font-size: 50px;
            width: 65px;
            margin: 1px;
        }
        .d3{
            margin: 5px;
            font-size: 30px;
        }
        #d2{
            width: 400px;
            height: 45px;
            font-size: 20px;
        }
        .d4{
            border: 1px solid black;
            border-radius: 25px;
            width: 100px;
            height: 45px;
            background-color: white;
           margin-left: 20px;
        }
        #div1{
            margin-left: 10px;
            margin-right: 10px;
        }
        .pro{
            display: flex;
            width:150%;
            margin: 20px;
            border: 1px solid black;
        }
        #imag{
           width:40%;
            height: 120px;
            //border: 1px solid black;
            margin-left: 12px;
            margin-top: 12px;
            margin-bottom: 10px;
        } 
        #fonP{
            font-size: 20px;
            margin: 10px;
        }
        h4:hover{
            color: blue;
        }
        h4:active{
            color: greenyellow;
        }
        .ma{
            margin-left:40px;

        
    </style>
</head>
    <body>
        <div class="content">
            <div class="d">
                <div id="div1"><a href="myhome.php"><h4>Home<h4></a></div>
                <div><h4>|</h4></div>
                <div id="div1"><a href="mypost.php"><h4>My Posts<h4></a></div>
            </div>
            <div class="d">
                <div style="font-size: 20px;"><b><u>DraftingPosts</u></b></div>
                <div><input type="button" value="Create New Post" style="background-color: grey;margin-left:500px;height:40px;"></div>
            </div>
            <div class="pro">
                <div><img src="profile.jpg" id="imag"></div>
                <div><div id="fonP"><b>Name of user</b></div><div style="width: 500px ; font-size:18px">write description about your post<br>and somethisng that you want to post.</div>
                <p style="text-align: right; margin-right:10px;font-size:15px">Published 3hours ago</p></div>
            </div>
            <div class="pro">
                <div><img src="profile.jpg" id="imag"></div>
                <div><div id="fonP"><b>Name of user</b></div><div style="width: 500px ; font-size:18px">write description about your post<br>and somethisng that you want to post.</div>
                <p style="text-align: right; margin-right:10px;font-size:15px">Published yesterday 9am</p></div>
            </div>
            


            <div class="d">
                <div style="font-size: 20px"><b><u>Published Posts</u></b></div>
            </div>
            <div class="pro">
                <div><img src="profile.jpg" id="imag"></div>
                <div><div id="fonP"><b>Name of user</b></div><div style="width: 500px ; font-size:18px">write description about your post<br>and somethisng that you want to post.</div>
                <p style="text-align: right; margin-right:10px;font-size:15px">Published 3hours ago</p></div>
            </div>
            <div class="pro">
                <div><img src="profile.jpg" id="imag"></div>
                <div><div id="fonP"><b>Name of user</b></div><div style="width: 500px ; font-size:18px">write description about your post<br>and somethisng that you want to post.</div>
                <p style="text-align: right; margin-right:10px;font-size:15px">Published yesterday 9am</p></div>
            </div>
        </div> 

            
    </body>
</html>
'
    ?>



