<?php
include 'header.php';
$get_qry = "SELECT * from game_data where USER_ID = '".$user_id."' order by ID DESC";
$get_details = $database->getAll($get_qry);

 ?>
<style media="screen">
  th,tr,td,h3{
    color:#fff !important;
  }
</style>
 <div class="container" style="padding-top:60px;">
    <h3 class="text-center">Results</h3>
    <button class="btn btn-sm btn-info" onclick="window.history.back();">Back</button>
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-3">

      </div>
      <div class="col-md-8 col-sm-8 col-xs-8" style="">
        <table class="table table-responsive " style="padding:50px;">
          <thead class="table-bordered">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Played Date</th>
              <th>Played Time</th>
              <th>Result</th>
            </tr>
          </thead>
          <tbody class="table-bordered">
            <?php
              $i = 0;
              foreach($get_details as $result){
                $i++;

             ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $get_user['full_name']; ?></td>
              <td><?php
              $ev_date = strtotime($result['Timestamp']);
              //echo date('m d Y', $ev_date);
              echo date('F d , Y', $ev_date);
               ?></td>
              <td><?php echo $newDateTime = date('h:i A', strtotime($result['Timestamp'])); ?></td>
              <td> <span class="badge badge-<?php if($result['Status'] == 'win'){ echo "success";}else if($result['Status'] == 'lost'){ echo "danger";}  else if($result['Status'] == 'draw'){ echo "info";} ?>">
                <?php
                  if($result['Status'] == 'win'){
                    echo "won";
                  }
                  else if($result['Status'] == 'lost'){
                    echo "Lost";
                  }
                  else if($result['Status'] == 'draw'){
                    echo "Draw";
                  }

                 ?>
              </span> </td>
            </tr>
            <?php
          }
             ?>
          </tbody>

        </table>
      </div>

    </div>


 </div>

<?php
  include 'footer.php';
 ?>

<script type="text/javascript">
  document.title = "Results";

</script>
