<?php
require_once('../../config.php');

    $myid = $_POST['userid'];
    $messageViewSql = "SELECT * from message WHERE message_id = '$myid'";
    $resultView = $db->query($messageViewSql);
    $message = mysqli_fetch_assoc($resultView);
    $sql = "UPDATE message set message_read='1' WHERE message_id='$myid'";
    $db->query($sql);

    // $id = $order['client_id'];
    // $client_sql = "SELECT * FROM client WHERE id='$id'";
    // $resultClient = $db->query($client_sql);
    // $client = mysqli_fetch_assoc($resultClient);

 ?>


<div id="email">
  <div class="container-fluid" style="padding:50px;">

    <form action="" class="form-group">
      <div class="row">
        <div class="col-md-6">
          <label for="">From:</label>
          <label for="" class="form-control"><?= $message['message_sender']; ?></label>
          <label for="">Date:</label>
          <label for="" class="form-control"><?= $message['message_date']; ?></label>
        </div>
        <div class="col-md-6">
          <label for="">Title:</label>
          <label for="" class="form-control"><?= $message['message_title']; ?></label>
          <label for="">CC:</label>
          <label for="" class="form-control"><?= $message['message_cc']; ?></label>
        </div>
      </div>
      <textarea name="name" rows="6" cols="115"  readonly><?= $message['message_content'];?></textarea>
    </form>
  </div>
</div>
