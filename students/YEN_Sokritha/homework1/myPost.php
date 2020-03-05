<?php
session_start();

$_SESSION['page_visited'] = basename('My Post');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My Posts</title>
    <link rel="stylesheet" href="./038 Grid.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/8c03c9aa36.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="homepage-box">
        <div class="row">
            <ul class="navbar">
                <li><a href="./homepage.php">Home</a></li>
                <li style="font-size: 1.2em; font-weight:600;">My Posts</li>
            </ul>
        </div>
        <!--_______________________________________Drafting Post__________________________________-->
        <div class="drafting-post">
            <div class="row">
                <h3 class="post-title">Drafting Posts</h3>
                <button>Create New Post</button>
            </div>
            <div class="row">
                <div class="col span-1-of-1 box">
                    <img src="./background.jpg" alt="background-image" class="profile-img" />
                    <div class="description-img">
                        <h3 class="post-heading">Lorem, ipsum dolor.</h3>
                        <p class="description-detailed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Praesentium nisi accusantium impedit necessitatibus voluptatum
                            ratione, modi quos excepturi veritatis magnam eaque, fugit
                            nesciunt reiciendis itaque repudiandae. Ipsa, nihil voluptatum
                            harum quae exercitationem dolorem ipsum velit rem et optio
                            dolore accusantium aliquid assumenda illum.
                        </p>
                        <p class="time-posted">Saved 3 hours ago</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-1 box">
                    <img src="./background.jpg" alt="background-image" class="profile-img" />
                    <div class="description-img">
                        <h3 class="post-heading">Lorem, ipsum dolor.</h3>
                        <p class="description-detailed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Praesentium nisi accusantium impedit necessitatibus voluptatum
                            ratione, modi quos excepturi veritatis magnam eaque, fugit
                            nesciunt reiciendis itaque repudiandae. Ipsa, nihil voluptatum
                            harum quae exercitationem dolorem ipsum velit rem et optio
                            dolore accusantium aliquid assumenda illum.
                        </p>
                        <p class="time-posted">Saved yesterday 9pm</p>
                    </div>
                </div>
            </div>
        </div>
        <!--_______________________________________Published Post__________________________________-->
        <div class="drafting-post">
            <div class="row">
                <h3 class="post-title">Published Posts</h3>
            </div>
            <div class="row">
                <div class="col span-1-of-1 box">
                    <img src="./background.jpg" alt="background-image" class="profile-img" />
                    <div class="description-img">
                        <h3 class="post-heading">Lorem, ipsum dolor.</h3>
                        <p class="description-detailed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Praesentium nisi accusantium impedit necessitatibus voluptatum
                            ratione, modi quos excepturi veritatis magnam eaque, fugit
                            nesciunt reiciendis itaque repudiandae. Ipsa, nihil voluptatum
                            harum quae exercitationem dolorem ipsum velit rem et optio
                            dolore accusantium aliquid assumenda illum.
                        </p>
                        <p class="time-posted">Published 3 hours ago</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-1 box">
                    <img src="./background.jpg" alt="background-image" class="profile-img" />
                    <div class="description-img">
                        <h3 class="post-heading">Lorem, ipsum dolor.</h3>
                        <p class="description-detailed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Praesentium nisi accusantium impedit necessitatibus voluptatum
                            ratione, modi quos excepturi veritatis magnam eaque, fugit
                            nesciunt reiciendis itaque repudiandae. Ipsa, nihil voluptatum
                            harum quae exercitationem dolorem ipsum velit rem et optio
                            dolore accusantium aliquid assumenda illum.
                        </p>
                        <p class="time-posted">Published yesterday 9pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>