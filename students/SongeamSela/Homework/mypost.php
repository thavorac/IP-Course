<?php

echo "<html>";
echo "<head>";
echo "
<style>
div {
    display: flex;
    position: relative;
    margin-left: 2%;
  }
  
  button {
    position: absolute;
    right: 0;
    width: 150px;
    height: 30px;
  }
  .postbox{
      border: 1px solid black;
      margin: 5px;
      margin-left: 2%;
  
  }
</style>
";
echo "<head>";

echo "<body>";
echo"
<h4 style='margin-left: 2%;'><a href='http://localhost:8888/Homework/home.php'>Home</a> &#9474; My Posts</h4>
<div>
    <h3><u>Drafting Posts</u></h3>
    <button>Create New Post</button>
</div>
<div class='postbox'>
    <p style='float: left;'><img src='female1-512.png' alt='Profile' height='200px' width='200px' border='1px' style='margin-left: 7%;'></p>
    
    <p style='margin-left: 10%;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorum atque fugit ipsa, in impedit sunt cupiditate animi itaque blanditiis odit aspernatur ea alias, laudantium placeat! Illum aliquid earum consequuntur?</p>
</div>
<div class='postbox'>
    <p style='float: left;'><img src='Boy-Avatar-PNG-Photo.png' aalt='Profile' height='200px' width='200px' border='1px' style='margin-left: 7%;'></p>
    
    <p style='margin-left: 10%;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorum atque fugit ipsa, in impedit sunt cupiditate animi itaque blanditiis odit aspernatur ea alias, laudantium placeat! Illum aliquid earum consequuntur?</p>
</div>
<h3 style='margin-left: 2%;'><u>Published Posts</u></h3>
<div class='postbox'>
    <p style='float: left;'><img src='avatar.png' alt='Profile' height='200px' width='200px' border='1px' style='margin-left: 7%;'></p>
    
    <p style='margin-left: 10%;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorum atque fugit ipsa, in impedit sunt cupiditate animi itaque blanditiis odit aspernatur ea alias, laudantium placeat! Illum aliquid earum consequuntur?</p>
</div>
<div class='postbox'>
    <p style='float: left;'><img src='pngtree-vector-user-young-boy-avatar-icon-png-image_1538408.jpg' alt='Profile' height='200px' width='200px' border='1px' style='margin-left: 7%;'></p>
    
    <p style='margin-left: 10%;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorum atque fugit ipsa, in impedit sunt cupiditate animi itaque blanditiis odit aspernatur ea alias, laudantium placeat! Illum aliquid earum consequuntur?</p>
</div>
";
echo "</body>";
echo "</html>";

?>