<?php

require_once('config.php');
include 'templates/admin-header.php';


if(isset($_GET['complete'])){
  $id = $_GET['complete'];
  $date = date('d:m:Y');
  $ticketSql3 = "UPDATE tickets SET ticket_complete=1, comp_date='$date' WHERE ticket_id='$id'";
  $db->query($ticketSql3);
  header('Location: admin.php?tickets');
}

if(isset($_GET['view'])){
  $id = $_GET['view'];
  $ticketSql4 = "SELECT * FROM tickets WHERE ticket_id = '$id'";
  $result = $db->query($ticketSql4);
  $ticket = mysqli_fetch_assoc($result);
  include('templates/view/ticket-view.php');
  ?>
<?php }

    if(isset($_GET['viewR'])){
    $id = $_GET['viewR'];
    $ticketSql4 = "SELECT * FROM tickets WHERE ticket_id = '$id'";
    $result = $db->query($ticketSql4);
    $ticket = mysqli_fetch_assoc($result);
    include('templates/view/ticketR-view.php');
    ?>

<?php }

if(isset($_POST['addTicket'])){
  $ticket = $_POST['ticket'];
  $ticket_email = $_POST['email'];
  $postDate = $_POST['postdate'];
  $ticketSql = "INSERT INTO tickets VALUES('','$ticket_email', '$postDate', '$ticket','','','','')";
  if (!$db->query($ticketSql)){
    printf("Errormessage: %s\n", $db->error);
  } else {
       redirect('ticket');
  };

}

if(isset($_POST['submitResponse'])){
  $ticket_id = $_POST['id'];
  $date = $_POST['date'];
  $user = $_POST['user'];
  $response = $_POST['response'];
  $type = $_POST['type'];
  $ticketSql4 = "INSERT INTO ticket_R VALUES('','$date', '$user', '$response','$ticket_id','', '$type')";
  if (!  $db->query($ticketSql4)){
    printf("Errormessage: %s\n", $db->error);
  } else {
      header('Location: tickets.php?view='.$ticket_id);
  };
}



if(isset($_POST['add'])){
 include('templates/crud/add-tickets.php');
}


if(isset($_GET['add'])){
 include('templates/crud/add-tickets.php');
}
?>
