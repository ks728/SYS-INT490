
<?php
include('header.php');

 ?>

  <div class="text-center"id="box">
  <header>
    <h1>Play Tic Tac Toe</h1>
  </header>
  <div id="message"></div>
  <ul id="gameBoard">
    <li class="tic"id="0">#</li>
    <li class="tic"id="1">#</li>
    <li class="tic"id="2">#</li>
    <li class="tic"id="3">#</li>
    <li class="tic"id="4">#</li>
    <li class="tic"id="5">#</li>
    <li class="tic"id="6">#</li>
    <li class="tic"id="7">#</li>
    <li class="tic"id="8">#</li>
  </ul>
  <div class="clearfix"></div>
  <footer>
<p style="color:#fff;" id="show_message" style="color:#15ff15 !important ;"></p>
  <button id="reset">Reset</button>

  </footer>
  </div>



<?php
include 'footer.php';
 ?>
</body>
<script type="text/javascript">
  const startTurn = 'X';
  const userName = "<?php echo $get_user['full_name'] ?>";
  const userID = "<?php echo $get_user['ID']; ?>";
</script>
    <script type="text/javascript" src="game.js">

    </script>
</html>
