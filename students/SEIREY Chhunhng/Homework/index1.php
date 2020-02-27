<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <style>
       body{
        margin-left: 5%;
        margin-right: 5%;
    }
       .post h3{
           float: left;

       }
       .post button{
           float:right;
       }
      .col-sm-12{
          position: relative;

        border: 1px solid chocolate;
        border-radius: 20px;
      }
      .col-sm-12 #status{
          position: absolute;
          margin-left: 75%;
          margin-top: 65px;

      }
       .col-sm-12 img{
           border: 2px solid #ccc;
           border-radius: 15px;
           padding: 10px;
           float: left;
           

       }
       .col-sm-12 p{
           font-family: Arial, Helvetica, sans-serif;
           font-size: 20px;
           margin-left: 27%;
       }
       a:active {
            color: red;
        background-color: yellow;
        }
        a:visited {
            color: green;
        }
        button{
            border: 1px solid #000000;
            border-radius: 5px;
            background-color: blue;
            color: white;
            font-weight:bold;
            font-family: 'Times New Roman', Times, serif;
        }
   </style>
    <title>Document</title>
</head>
<body>
    <a href="index1.html">Home</a>| <a href="index2.html">My Posts</a><br><br><br>
   <br><br>
    <div class="post">
    
        <button>Create New Post</button>
        <h3><ins><b>Drafting Posts</b></ins>
    </h3>
</div>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <img src="Anonymous.jpg" alt="" width="25%" height="auto">
       <div><p>Decription</p></div>
       <p id="status">Saved 3 hours ago</p>
    

    </div>
</div><br>
<div class="row">
    <div class="col-sm-12">
        <img src="Anonymous.jpg" alt="" width="25%" height="auto">
        <div><p>Decription</p></div>
        <p id="status">Saved 3 hours ago</p>
    

    </div>
</div><br>
<div class="row">
    <div class="col-sm-12">
        <img src="Anonymous.jpg" alt="" width="25%" height="auto">
        <div><p>Decription</p></div>
        <p id="status">Saved 3 hours ago</p>
    

    </div>
</div><br>
<h3 style="margin-bottom: 50px;"><ins><b>Posts</b></ins>
 <br><br>
    <div class="row">
        <div class="col-sm-12">
            <img src="Anonymous.jpg" alt="" width="25%" height="auto">
            <p>Decription</p>
            <p id="status">Posted 3 hours ago</p>
    
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <img src="Anonymous.jpg" alt="" width="25%" height="auto">
            <p>Decription</p>
            <p id="status">Posted 3 hours ago</p>
    
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <img src="Anonymous.jpg" alt="" width="25%" height="auto">
            <p>Decription</p>
            <p id="status">Posted 3 hours ago</p>
        </div>
    </div><br>
    
</body>
</html>