<?php

require_once('header.php');
require_once('config.php');

session_start();


if(isset($_GET['basic'])){
    $_SESSION['cart'] = true;
    $_SESSION['cart_item'] = 'Basic';
    $_SESSION['cart_price'] = 99;
}

if(isset($_GET['standerd'])){
    $_SESSION['cart'] = true;
    $_SESSION['cart_item'] = 'Standerd';
    $_SESSION['cart_price'] = 199;
}

if(isset($_GET['unlimited'])){
    $_SESSION['cart'] = true;
    $_SESSION['cart_item'] = 'Unlimited';
    $_SESSION['cart_price'] = 299;
}

is_logged_in('client');

$id = $_SESSION['userID'];
$client_sql = "SELECT * FROM client WHERE id='$id'";
$resultClient = $db->query($client_sql);
$client = mysqli_fetch_assoc($resultClient);
$date = date('d:m:y');
$item = $_SESSION['cart_item'];
$price =  $_SESSION['cart_price'];

if(isset($_GET['order-complete'])){
    $cid = $client['id'];
    $orderSql = "INSERT INTO orders VALUES ('', '$cid', '$date','1 month','$item','$price',1,0)";
    $db->query($orderSql);
    unset($_SESSION['cart']);
    unset($_SESSION['cart_item']);
    unset($_SESSION['cart_price']);
    header('Location: index.php');
}

if(isset($_GET['complete'])){
  $id = $_GET['complete'];
  $orederSql3 = "UPDATE orders SET order_complete=1 WHERE order_id='$id'";
  $db->query($orederSql3);
    redirect('orders');
}
?>


<div id="payment">   
<div class="container" style="padding:50px;">
  <div class="card">
    <div class="card-header">
      <strong><?=  $date; ?></strong>
      </span>
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
              <td class="left strong">Origin License</td>
              <td class="left">Extended License</td>

              <td class="right">$999,00</td>
              <td class="center">1</td>
              <td class="right">$999,00</td>
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
                <td class="right">$8.497,00</td>
              </tr>
              <tr>
                <td class="left">
                  <strong>Discount (20%)</strong>
                </td>
                <td class="right">$1,699,40</td>
              </tr>
              <tr>
                <td class="left">
                  <strong>VAT (10%)</strong>
                </td>
                <td class="right">$679,76</td>
              </tr>
              <tr>
                <td class="left">
                  <strong>Total</strong>
                </td>
                <td class="right">
                  <strong>$7.477,36</strong>
                </td>
              </tr>
            </tbody>
          </table>
            <form action="stripeAPI.php?id=<?= $_SESSION['cart_item']; ?>" method="POST" class="text-right">
                <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_9KuFtUOrr7GHBdNyoJc1PyAs"
                data-amount="<?= $_SESSION['cart_item']; ?>"
                data-name="<?= $_SESSION['cart_price']; ?>"
                data-description="Widget"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
                </script>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


</div>























