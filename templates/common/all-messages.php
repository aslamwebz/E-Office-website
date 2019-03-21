<?php

require_once('config.php');


if($_SESSION['permission'] === 'admin'){
  $messageSql = "SELECT * from message";
} else {
  $email = $_SESSION['email'];
  echo $email;
  $messageSql = "SELECT * from message WHERE message_sender='$email' OR message_receiver='$email' OR message_cc='$email'";
}
$result = $db->query($messageSql);
?>

<div id="blog">
  <div class="container-fluid">
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th></th>
          <th>Message Title</th>
          <th>Message</th>
          <th>Message Date</th>
          <th>Sender</th>
          <th>Receiver</th>
          <th>To CC</th>
          <th>Read</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
    <?php while($message = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td style="<?= (($message['message_read'] == 0)?'color:red;':'') ?>"><?= (($message['message_read'] == 0)?$message["message_id"].' New':$message["message_id"]); ?></td>

        <td><?= $message['message_title']; ?></td>
        <td><button type="button"  class="btn btn-primary" data-toggle="modal"  onclick="setSession(<?= $message['message_id']; ?>)" data-target="#messageModal">
          View Message</button></td>
        <td><?= $message['message_date']; ?></td>
        <td><?= $message['message_sender']; ?></td>
        <td><?= $message['message_receiver']; ?></td>
        <td><?= $message['message_cc']; ?></td>
        <td><?= (($message['message_read'] == 0)?'':'<i class="fa fa-check"></i>') ?></td>
        <td><a href="message.php?edit=<?= $message['message_id']; ?>" class="button button-action button-box"><i class="fa fa-edit"></i></a>
          <a href="message.php?delete=<?= $message['message_id']; ?>" class="button button-caution button-box"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    <?php endwhile; ?>
      </tbody>
  </table>
  <form class="" action="messages.php" method="post">
    <button type="submit" style="margin:40px 0;" class="button  button-rounded button-primary button-large" name="submit">Send Message</button>
  </form>

  <!-- Modal -->
  <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" id="modal-dialog" role="document">
      <div class="modal-content">
        <div id="content">
        </div>
            <script type="text/javascript">
              function setSession(userid) {
                $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  url: "templates/view/message-view.php",
                  data: {'userid':userid},
                  success: function(response){
                    $("#content").html(response);
                  }
                });
              };
            </script>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary" onclick="myFunction()">Print</button> -->
        </div>
      </div>
    </div>
    <script>
    function myFunction() {
      window.print();
    }
    </script>
  </div>


  </div>
</div>
