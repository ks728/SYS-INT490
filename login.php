<?php
session_start();
if($_SESSION['user_id'] != ''){
  header('location:dashboard.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login to Play</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="index_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="login-form" style="padding-top:150px;">
    <form action="javascript:void(0)" method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login to Play</h4>
      <p id="msg" style="color:red;text-align: center;"></p>
      <p id="result" style="color:red;text-align: center;" ></p>
        <div class="form-group">
            <input type="text" id="username" autofocus class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" id="cpassword" autocomplete="off" class="form-control" placeholder="Password" required="required">
        </div>

        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login" id="login">
        <button type="submit" class="btn btn-info btn-block btn-lg" onclick="window.location.href='register.php'">Register Here</button>
    </form>



</div>
</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){
    $("#login").click(function(){
      $("#msg").html("");
      $("#login").prop('disabled', true);
      var username = $("#username").val();
      var password = $("#cpassword").val();
      if(username == ''){
        $("#result").html("Username Must Be Filled");
        $("#username").focus();
        $("#login").prop('disabled', false);
        return false;
      }
      else if(password == ''){
        $("#result").html("Password Must Be Filled");
        $("#cpassword").focus();
        $("#login").prop('disabled', false);
        return false;
      }
      else {
        var dataString = "username=" + username + "&password=" + password;
        $.ajax({
          type:"post",
          url:"login_act.php",
          data:dataString,
          success:function(results){
            console.log(results);
            var result = JSON.parse(results);
            if(result.status == 'error'){
              $("#result").html("Enter Wrong Username Or Password");
              $("#login").prop('disabled', false);
              return false;
            }
            else if(result.status == 'success'){
              window.location.href="dashboard.php";

            }
            else {
              $("#result").html("Unknown Error Occured");
              $("#login").prop('disabled', false);
              return false;
            }


          }
        })
      }
    })
  })
</script>
