
<?php
session_start();
$ticket_id = $ticket['ticket_id'];
$ticketSql = "SELECT * FROM ticket_r WHERE ticket_id='$ticket_id'";
$resultTicket = $db->query($ticketSql);
?>



<div id="ticket">
  <div class="container">
    <h2 class="display-4 text-center">Ticket</h2>
    <br>
    <div class="card">
      <h5 class="card-header"><?= $ticket['ticket_email'];  ?> / <?= $ticket['ticket_date'];  ?></h5>
      <div class="card-body">
        <p class="card-text"><?= $ticket['ticket']; ?></p>
      </div>
    </div>
    <div class="col-md-12 text-right">
      <br>
    </div>
    </div>
</div>

<div id="response">
  <div class="container">
    <h3>Ticket Response</h3>

    <?php while($response = mysqli_fetch_assoc($resultTicket)): ?>

        <br>
        <div class="card <?= (($response['type'] == 'request')?' text-white bg-warning':' text-white bg-success'); ?>">
          <h5 class="card-header"><?= $response['date']; ?> <?= (($response['type'] == 'request')?' requested by':' replied by'); ?> <?= $response['user'];  ?></h5>
          <div class="card-body bg-light text-dark">
            <p class="card-text"><?= $response['response']; ?></p>
          </div>
        </div>
        <br>


    <?php endwhile; ?>

    <form action="tickets.php" class="form-control" method="POST" novalidate>
      <input type="hidden" name="id" value="<?= $ticket['ticket_id'];  ?>">
      <input type="hidden" name="user" value="<?= $_SESSION['userName']; ?>">
      <input type="hidden" name="date" value="<?= date('d:m:Y'); ?>">
      <input type="hidden" name="type" value="request">
      <div class="card ">
        <div class="card-body">
          <textarea placeholder="Please Enter Your Message" name="response" rows="2" cols="100" required></textarea>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <br>
        <button  class="button button-primary" name="submitResponse" type="submit">Submit</button>
      </div>
    </form>
    <div class="col-md-12 text-right">
    <br>
    <a href="admin.php?tickets" type="button" class="button button-primary">Cancel</a>
    </div>

  </div>
</div>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
