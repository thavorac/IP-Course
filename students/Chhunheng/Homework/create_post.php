<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="createPostPage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Create a New Post</title>
</head>
<body>
<a href="homePage.php">Home</a>| <a href="postPage.php">My Posts</a><br><br><br>
    <h3 style="text-decoration:underline">Create a new post</h3><br><br>
    <form action="" method="POST" enctype="multipart/form-data">
        <fieldset>
        
            <legend>Post information</legend><br>
            <table>
            <tr>
                <td>  <label for="title">Title:</label></td>
                <td><input type="text"></td>
            </tr>
           
            <tr>
                <br>
                <td> <label for="content">Content: </label></td>
                
                <td> <textarea name="" id="" cols="30" rows="10"></textarea><br></td>
            </tr>
            <tr>
                <td>  <label for="image_avatar">Images Avatar:</label><br></td>
                <td>  
                <button id="upload_image" ><i class="fa fa-upload">  Upload more</i></button>
                <div class='container'>
                     <img src="pictures/unknow.png" alt=""  height="100px" class="image_avatar">
                     <button>Delete</button>
                </div>

                
            
            <br></td>
            </tr>
            <tr>
                <td>   <label for="image_content">Images Content:</label><br></td>
                <td>
                <div class="container1">
                        <img src="pictures/unknow.png" alt=""  height="100px">
                        <button>Delete</button>
                    </div>
                        
                </td>
            </tr>
            <tr>
                <td></td>
               
                       
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center"><button id="upload_image1" ><i class="fa fa-upload">  Upload more</i></button></td></td>
            </tr>
          

        </table>
                

</fieldset>
          
            
            <br>
            <div class="btn">
                <button id="cancel">Cancel</button>
                <button id="saveAndPost" style="background-color:green">Save & Publish</button>
                <button id="save" style="background-color:#0000A0">&nbsp;&nbsp;Save&nbsp;&nbsp;  </button>
   
            </div>
           
        </form>

</body>
</html>
