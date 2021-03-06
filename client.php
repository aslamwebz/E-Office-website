<?php

session_start();
require_once('config.php');
include('templates/admin-header.php');

is_logged_in('client');

$userSql = "SELECT * FROM users";
$resultUser = $db->query($userSql);

?>

<div id="admin-panel" class="menuDisplayed">
    <div class="sidebar " id="sidebar">
        <ul class="navbar-nav ">
          <li class="nav-item " id="welcome">
            <input type="hidden" name="" id="page" value="<?= $stringA; ?>">
            <h4 class="nav-link " style=" padding-top:30px; ">&nbsp;DASHBOARD</h4>
            <h5 class="nav-link " style="margin-bottom:50px; color:white; ">&nbsp;Welcome <?= ucfirst($_SESSION['userName']); ?> </h5>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="client.php"><i class="fa  fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="client.php?notes"><i class="fas fa-sticky-note"></i>&nbsp;Notes</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="client.php?messages"><i class="fas fa-envelope"></i>&nbsp;Messages</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="client.php?orders"><i class="fa fa-shopping-cart"></i>&nbsp;Orders</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="client.php?myticket"><i class="fas fa-headset"></i>&nbsp;My Ticket</a>
          </li>
        </ul>
    </div>
    <div id="button" class="">
      <a href="#" class="btn btn-success" id="menu-toggle">M</a>
    </div>
    <div class="main-content" id="main-content" >
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin.php" >Dashboard</a>
        </li>
        <li class="breadcrumb-item active">

          <?php
          $stringA = $_SERVER['REQUEST_URI'];
          $stringA = str_replace('/eoffice/','', $stringA);
          $stringA = str_replace('.php','', $stringA);
          $stringA = str_replace('admin?','', $stringA);
          echo ucfirst($stringA);
?>

        </li>
      </ol>

      <?php
      if($_SERVER["REQUEST_URI"] == '/eoffice/admin.php'){
        include('templates/admin-main.php');
      }

      if(isset($_GET['notes'])){
        include('templates/common/all-notes.php');
      }

      if(isset($_GET['messages'])){
        include('templates/common/all-messages.php');
      }

      if(isset($_GET['orders'])){
        include('templates/common/all-orders.php');
      }

      if(isset($_GET['myticket'])){
        include('templates/common/myticket.php');
      }
      ?>

    </div>
</div>

<?php include('templates/footer_scripts.php'); ?>


