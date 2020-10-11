<?php 	
$localhost = "localhost";
$username = "roiconst";
$password = "Kishore**1@9@97";
$dbname = "roiconst_roi";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
   //echo "Successfully connected";
}

?>