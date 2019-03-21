<?php

session_start();
require_once('config.php');
include('templates/admin-header.php');

is_admin('admin','Please log in to view that page');



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
            <a class="nav-link" href="admin.php"><i class="fa  fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?users"><i class="fa fa-users"></i>&nbsp;Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php?blogs"><i class="fa  fa-newspaper-o "></i>&nbsp;Blogs</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?news"><i class="fa  fa-newspaper-o"></i>&nbsp;News <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?logs"><i class="fa  fa-history"></i>&nbsp;Logs</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?notes"><i class="fas fa-sticky-note"></i>&nbsp;Notes</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?messages"><i class="fas fa-envelope"></i>&nbsp;Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php?tasks"><i class="fas fa-tasks"></i>&nbsp;Tasks</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?orders"><i class="fa fa-shopping-cart"></i>&nbsp;Orders</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?tickets"><i class="fas fa-headset"></i>&nbsp;Tickets</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?myticket"><i class="fas fa-headset"></i>&nbsp;My Ticket</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?clients"><i class="fas fa-headset"></i>&nbsp;Clients</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php?widgets"><i class="fas fa-headset"></i>&nbsp;Widgets</a>
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

      if(isset($_GET['users'])){
        include('templates/common/allUsers.php');
      }

      if(isset($_GET['news'])){
        include('templates/common/all-news.php');
      }

      if(isset($_GET['blogs'])){
        include('templates/common/all-blogs.php');
      }

      if(isset($_GET['logs'])){
        include('templates/common/all-logs.php');
      }

      if(isset($_GET['notes'])){
        include('templates/common/all-notes.php');
      }

      if(isset($_GET['tasks'])){
        include('templates/common/all-tasks.php');
      }

      if(isset($_GET['messages'])){
        include('templates/common/all-messages.php');
      }

      if(isset($_GET['tickets'])){
        include('templates/common/all-tickets.php');
      }

      if(isset($_GET['orders'])){
        include('templates/common/all-orders.php');
      }

      if(isset($_GET['myticket'])){
        include('templates/common/myticket.php');
      }
       if(isset($_GET['clients'])){
        include('templates/common/all-clients.php');
      }

      if(isset($_GET['widgets'])){
        include('widgets/w.php');
      }
      ?>

    </div>
</div>

<?php include('templates/footer_scripts.php'); ?>


