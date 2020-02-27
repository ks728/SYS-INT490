
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script type="text/javascript">
  getData();
  setInterval(function(){
    getData();
  },
  6000);
  function getData(){
    $.ajax({
      type:"post",
      url:"get_user_details.php",
      data:{"sample":"sample"},
      success:function(data){
        var getResult = JSON.parse(data);
        $("#own_data").html(getResult.win);
        $("#lost_data").html(getResult.lost);
        $("#draw_data").html(getResult.draw);
      }
    })
  }
</script>
