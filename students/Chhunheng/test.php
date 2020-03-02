<?php
    echo "Test Github"."<br>";
    echo $_SERVER['PHP_SELF']."<br>" ;
    echo $_SERVER['HTTP_USER_AGENT']."<br>";
     $visiting_page=explode("/",$_SERVER['PHP_SELF']);
    $page=explode(".", $visiting_page[count($visiting_page)-1]);
    echo $page[0];

    $visiting_device=explode("/",$_SERVER['HTTP_USER_AGENT']);
    $device=$visiting_device[0];
    echo $device;

   

?>