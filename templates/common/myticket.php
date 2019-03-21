<?php

require_once('config.php');
  $email = $_SESSION['email'];
  $sql = "SELECT * from tickets WHERE ticket_email='$email'";
  $result = $db->query($sql);
 ?>


<div id="ticket">
  <div class="container-fluid">
    <h2 class="text-center">Tickets Open</h2>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Ticket ID</th>
          <th>From</th>
          <th>Date</th>
          <th>Assigned To</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    <?php while($ticket = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $ticket['ticket_id']; ?></td>
        <td><?= $ticket['ticket_email']; ?></td>
        <td><?= $ticket['ticket_date']; ?></td>
        <td><?= $ticket['ticket_assigned_to']; ?></td>
        <td class="<?= (($ticket['ticket_complete'] == 0)?'table-danger':'table-success') ?>"><?= (($ticket['ticket_complete'] == 0)?'Not Completed':'Complete') ?></td>
        <td><a href="tickets.php?viewR=<?= $ticket['ticket_id']; ?>" class="button button-primary">View</a>
        <a href="tickets.php?complete=<?=  $ticket['ticket_id']; ?>" class="button button-action">Complete</a></td>
      </tr>
    <?php endwhile; ?>
      </tbody>
  </table>
  <form class="" action="tickets.php" method="post">
    <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary button-large">Add Ticket</button>
  </form>
  </div>
</div>
