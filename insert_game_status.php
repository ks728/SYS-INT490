<?php
include('inc/Database.php');
$database = new Database;
if($_POST){
  $id = $_POST['ID'];
  $status = $_POST['Status'];
  $ins = "INSERT INTO game_data (`USER_ID`,`Status`) VALUES('$id','$status')";
  $database->execute($ins);
}


 ?>
