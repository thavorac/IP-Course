

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <!-- css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/createPostPage.css">
    <!-- <link rel="stylesheet" href="css/dispaly_image.css"> -->
    <title>Create a New Post</title>
    <style>
      
       
    </style>
</head>
<body>
<a href="php/homePage.php">Home</a>| <a href="php/postPage.php">My Posts</a><br><br><br>
    <h3 style="text-decoration:underline">Create a new post</h3><br><br>
     <form action="upload_file.php" method="POST" enctype="multipart/form-data" >
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
                <input type="file" name="fileToUpload" id="fileToUpload" hidden/>
              
                <button type="button" id="upload_image"  ><i class="fa fa-upload">  Upload more</i></button>
               
               
               
                <div class='container'>
                        <div class="sliders">
                                    <img src="uploads/image_avatars/4-46895_pink-rose-png-clip-art-image-pink-rose.png" id="s1" class="slide" >
                                    <img src="uploads/image_avatars/128-1288691_flowers-red-rose-hd.jpg" id="s2" class="slide" >
                                    <!-- <img src="upload/image_avatars/" id="s3" class="slide"> -->
                                    
                        
                                </div>
                     <button>Delete</button>
                </div>

                
            
            <br></td>
            </tr>
            <tr>
                <td>   <label for="image_content">Images Content:</label><br></td>
                <td>
                <div class="container1">
                        <img src="pictures/unknow.png" id="n1" alt=""  class="slide2">
                        <img src="uploads/image_contents/pic1.jpg" id="n2" alt="" class="slide2">
                        
                        <button type="button" >Delete</button>
                    </div>
                        
                </td>
            </tr>
            <tr>
                <td></td>
               
                       
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center">
                <input type="file" name="fileToUpload1" id="fileToUpload1" hidden/>
                <button type="button" id="upload_image1" ><i class="fa fa-upload">  Upload more</i></button></td></td>
            </tr>
          

        </table>
                

</fieldset>
          
            
            <br>
            <div class="btn">
                <button type="button" id="cancel">Cancel</button>
                <button type="button" id="saveAndPost" style="background-color:green">Save & Publish</button>
                <button type="submit" id="save" style="background-color:#0000A0">&nbsp;&nbsp;Save&nbsp;&nbsp;  </button>
   
            </div>
           
        </form>

         <script src="javascript/create_post.js" type="text/javascript"></script>
            <script src="javascript/display_image"></script>
</body>
</html>
