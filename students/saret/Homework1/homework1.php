
<style>
#btn {
    float: right;
    background: blue;
    border-radius: 5px;
}
.post {
    border: 1px solid black;
    margin-top: 10px;
    float: right;
    width:100%;
    
}
.time {
    float: right;
}

img {
    float: left;
    width: 100px;
    height: 100px;
    margin: 10px;
}
</style>
<?php
    echo '
        <div class="wrap-all">
            <p><a href="mypost.php">Home</a> | My Post</p>
            <button type="submit" id="btn"> create New Post </button>
            <h3><a href="">Drafting Posts</a></h3>
            <div class="post">
            <img src="../learnphp/blank-profile.png" alt="pic"> 
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto velit ad dolor consequatur cupiditate esse, earum quidem vero temporibus voluptatum!
            <p class="time"> Saved 3hours ago</p> 
            </div>

            <div class="post">
            <img src="../learnphp/blank-profile.png" alt="pic"> 
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto velit ad dolor consequatur cupiditate esse, earum quidem vero temporibus voluptatum!
            <p class="time"> Saved yesterday 9pm</p>
            </div>
            <h3><a href="">Published Posts</a></h3>
            <div class="post">
            <img src="../learnphp/blank-profile.png" alt="pic"> 
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto velit ad dolor consequatur cupiditate esse, earum quidem vero temporibus voluptatum!
            <p class="time"> Published 3hours ago</p>
            </div>

            <div class="post">
            <img src="../learnphp/blank-profile.png" alt="pic"> 
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto velit ad dolor consequatur cupiditate esse, earum quidem vero temporibus voluptatum!
            <p class="time"> Published yesterday 9pm</p>
            </div>

            
        </div>
    ';
?>