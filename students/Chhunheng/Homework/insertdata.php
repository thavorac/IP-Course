<?php //include 'homePage.php'; include 'postPage.php';
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="blogs";
   //split String before input into DB
    $visiting_page=explode("/",$_SERVER['PHP_SELF']);
    $page=explode(".", $visiting_page[count($visiting_page)-1]);
    $visiting_device=explode("/",$_SERVER['HTTP_USER_AGENT']);
    $device=$visiting_device[0];

   //make connection to db
     $conn=new mysqli($servername, $username, $password,$dbname);
    if($conn->connect_error){
        die ("Connection failed: ".$conn->connect_error);
    }
    $sql="insert into visitorhistories(time, visiting_page,impression,visiting_device)
    values (current_timestamp,'$page[0]','Good','$device')";
    // $sql.="insert into visitorhistories(time, visiting_page,impression,visiting_device)
    // values(current_timestamp,$page[0],'Good',$device)";

    if($conn->query($sql)===TRUE){
        echo '<script type="text/javascript">';
        echo ' console.log("success Recorded")';  //not showing an alert box.
        echo '</script>';
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }

?>