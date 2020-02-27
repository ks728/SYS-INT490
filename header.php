<?php
include 'auth.php';
include('inc/Database.php');
$database = new Database;
$user_id = $_SESSION['user_id'];
$get_query = "SELECT * FROM user_tbl WHERE ID = '".$user_id."'";
$get_user = $database->getOne($get_query);


 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Welcome To Tic Tac Toe Game</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background:#4dc5c0b8!important;">
  <a class="navbar-brand" href="index.php"><img src="logo.png" class="logo img-fluid pull-xs-left" alt="..." style="width: 65px;height: 28px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container" id="navbarNav">
    <ul class="collapse navbar-collapse navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="javascript:void(0)">Won <span class="badge badge-danger" id="own_data">0</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Loss <span class="badge badge-danger" id="lost_data">0</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Draw <span class="badge badge-danger" id="draw_data">0</span></a>
      </li>

    </ul>
    <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="JavaScript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Welcome! <?php echo $get_user['full_name']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="results.php">Results</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>
  </div>
</nav>
