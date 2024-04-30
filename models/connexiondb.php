<?php 

function dbconnect_mysqli(){
    global $_host, $_username, $_password,$_db;
    require_once('config.php');
    $connect=mysqli_connect($_host,$_username,$_password,$_db)
    or die("connect Error" .mysqli_error($connect));
    $connect->set_charset("utf8");
    return $connect;
  }

?>