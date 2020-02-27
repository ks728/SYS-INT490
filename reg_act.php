<?php
include('inc/Database.php');
$database = new Database;
if($_POST){
  $username = $_POST['username'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $f_name = $_POST['f_name'];
  $email = $_POST['f_name'];
  $qry = "SELECT ID,username FROM user_tbl where username = '".$username."'";
  $get_user = $database->getOne($qry);
  if($get_user){
    $data['status'] = 'error';
  }
  else{
    $query = "INSERT INTO user_tbl (`full_name`,`username`,`email`,`password`) VALUES ('$f_name','$username','$email','$password')";
    $database->execute($query);
    $data['status'] = 'success';
  }
  echo json_encode($data);
}



 ?>
