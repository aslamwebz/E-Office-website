<?php

if ($_SERVER["REQUEST_URI"] == '/eoffice/admin.php?orders' OR $_SERVER["REQUEST_URI"] == '/eoffice/user.php?orders') {
$orderSql2 = "SELECT * from orders";
$result2 = $db->query($orderSql2);
} else {
$cid = $_SESSION['userID'];
$orderSql2 = "SELECT * from orders WHERE client_id=$cid";
$result2 = $db->query($orderSql2);
}
?>

<div id="orders">
  <div class="container-fluid">
    <table class="table table-striped table-bordered">
      <thead class="thead">
        <tr>
          <th>Order ID</th>
          <th>Client</th>
          <th>Order Date/th>
            <th>Due Date</th>
            <th>View Order</th>
            <th>Total Amount</th>
            <th>Paid</th>
            <th>Shipped</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while($order = mysqli_fetch_assoc($result2)): ?>
            <tr class="<?= (($order['order_complete'] == 0)?'table-warning':''); ?>">
              <td><?= $order['order_id']; ?></td>
              <?php
              $id = $order['client_id'];
              $oid = $order['order_id'];
              $clientSql = "SELECT * FROM  client WHERE id='$id'";
              $result = $db->query($clientSql);
              $client = mysqli_fetch_assoc($result);
              $clientName = $client['firstname']. " " . $client['lastname'];
              ?>
              <td><?= $clientName; ?></td>
              <td><?= $order['order_date']; ?></td>
              <td><?= $order['due_date']; ?></td>
              <td><button type="button"  class="btn btn-primary" data-toggle="modal"  onclick="setSession(<?= $order['order_id']; ?>)" data-target="#myModal">
                View Receipt</button></td>
                <td><?= $order['total']; ?></td>
                <td><?= $order['paid']; ?></td>
                <td><?= (($order['order_complete'] == 0)?'Not Completed':'Complete') ?></td>
                
                <?php if ($_SERVER["REQUEST_URI"] == '/eoffice/admin.php') { ?>
                <td><?= (($order['order_complete'] == 0)?'<a href="orders.php?complete='.$oid.'" class="button button-action">Complete</a>':'Complete')?>;</td>
                <?php } ?>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>

        <?php include 'templates/footer_scripts.php'; ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered" id="modal-dialog" role="document">
            <div class="modal-content">
              <div id="content">
              </div>
                  <script type="text/javascript">
                    function setSession(userid) {
                      $.ajax({    
                        type: "POST",
                        url: "templates/view/order-view.php",
                        data: {'userid':userid},
                        success: function(response){
                          $("#content").html(response);
                        }
                      });
                    };
                  </script>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="myFunction()">Print</button>
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
