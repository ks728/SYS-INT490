<?php
session_start();
include('inc/Database.php');
$database = new Database;
if($_POST){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $qry = "SELECT ID,username,password FROM user_tbl where username = '".$username."'";
  $get_user = $database->getOne($qry);
  if($get_user){
    if(password_verify($password,$get_user['password'])){
      $_SESSION['user_id'] = $get_user['ID'];
      $data['status'] = 'success';
    }
    else{
      $data['status'] = 'error';
    }

  }
  else{

    $data['status'] = 'error';
  }
  echo json_encode($data);
}


 ?>
