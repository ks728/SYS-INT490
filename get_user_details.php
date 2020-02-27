<?php
if($_POST){
  include('auth.php');
  include('inc/Database.php');
  $database = new Database;
  $user_id = $_SESSION['user_id'];
  $get_qry = "SELECT * from game_data where USER_ID = '".$user_id."'";
  $get_details = $database->getAll($get_qry);
  foreach ($get_details as $key => $value) {
    if($value['Status'] == 'win'){
      $win[] = $value['Status'];
      continue;
    }
    if($value['Status'] == 'lost'){
      $lost[] = $value['Status'];
      continue;
    }
    if($value['Status'] == 'draw'){
      $draw[] = $value['Status'];
      continue;
    }
  }

  $json_data['win'] = count($win);
  $json_data['lost'] = count($lost);
  $json_data['draw'] = count($draw);
  echo json_encode($json_data);

}



 ?>
