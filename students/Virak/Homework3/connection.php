<?php
    // $con = new mysqli($sername, $username, $password);
    // $query = "insert into visitor_histories ()";
    // $con->query($query);
    // $con->close();
?>

<?php
    // function execute select statement
  function run_query($sql)
  {
      $con = mysqli_connect('localhost', 'root', 'virak@123.com', 'homework_php');
      $result = mysqli_query($con, $sql);
      mysqli_close($con);
      return $result;
  }

?>
