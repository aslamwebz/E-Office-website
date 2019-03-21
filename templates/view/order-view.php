<?php
require_once('../../config.php');

    $myid = $_POST['userid'];
    $orderSqlView = "SELECT * from orders WHERE order_id = '$myid'";
    $resultView = $db->query($orderSqlView);
    $order = mysqli_fetch_assoc($resultView);

    $id = $order['client_id'];
    $client_sql = "SELECT * FROM client WHERE id='$id'";
    $resultClient = $db->query($client_sql);
    $client = mysqli_fetch_assoc($resultClient);

 ?>


<div class="container" style="padding:50px;">
  <div class="card">
    <div class="card-header">
      Invoice
      <strong><?= $order['order_date']; ?></strong>
      <span class="float-right"> <strong>Status: </strong><?= (($order['order_complete'])?'Complete':'Pending'); ?></span>

    </div>
    <div class="card-body">
      <div class="row mb-4">
        <div class="col-sm-6">
          <h6 class="mb-3">From:</h6>
          <div>
            <strong>Eoffice</strong>
          </div>
          <div>TempLoc</div>
          <div>11201</div>
          <div>Email: EOffice@EOffice.com</div>
          <div>Phone: +48 444 666 3333</div>
        </div>

        <div class="col-sm-6">
          <h6 class="mb-3">To : </h6>
          <div>
            <strong><?= $client['firstname'] . " " . $client['lastname']; ?></strong>
          </div>
          <div>Address : <?= $client['client_address']; ?></div>
          <div><?= $client['client_address_2']; ?></div>
          <div>Email: <?= $client['email']; ?></div>
          <div>Phone: <?= $client['client_mobile']; ?></div>
        </div>



      </div>

      <div class="table-responsive-sm">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="center">#</th>
              <th>Item</th>
              <th>Description</th>

              <th class="right">Unit Cost</th>
              <th class="center">Qty</th>
              <th class="right">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="center">1</td>
              <td class="left strong"><?= $order['order_details'] ?></td>
              <td class="left">Extended License</td>

              <td class="right">$<?= $order['total'] ?></td>
              <td class="center">1</td>
              <td class="right">$<?= $order['total'] ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-5">

        </div>

        <div class="col-lg-4 col-sm-5 ml-auto">
          <table class="table table-clear">
            <tbody>
              <tr>
                <td class="left">
                  <strong>Subtotal</strong>
                </td>
                <td class="right">$<?= $order['total'] ?></td>
              </tr>
              <!-- <tr>
                <td class="left">
                  <strong>VAT (10%)</strong>
                </td>
                <td class="right">$679,76</td>
              </tr> -->
              <tr>
                <td class="left">
                  <strong>Total</strong>
                </td>
                <td class="right">
                  <strong>$<?= $order['total'] ?></strong>
                </td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>

    </div>
  </div>
</div>
