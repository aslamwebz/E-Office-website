<?php

session_start();

require_once('config.php');
include('templates/admin-header.php');

$userSql = "SELECT * FROM users";
$resultUser = $db->query($userSql);

?>

<style>

#sidebar-wrapper{
  z-index:1;
  position: absolute;
  width:0;
  height: 100%;
  overflow-y: hidden;
  background: #2c3e50;
  opacity: 0.9;
  transition: all 0.7s;

}

#page-content-wrapper{
  width: 100%;
  position: absolute;
  padding: 15px;
  transition: all 0.7s;
}

#wrapper.menuDisplayed #sidebar-wrapper{
  width: 250px;
  transition: all 0.7s;
}

#wrapper.menuDisplayed #page-content-wrapper{
  padding-left: 250px;
  transition: all 0.7s;
}

#sidebar-wrapper .navbar-nav a.nav-link{
  margin: 1px 0px;
  padding: 10px 25px;
  color: rgba(255, 255, 255, 0.8);
  font-size: 16px;
  font-family: 'Montserrat', sans-serif;
  background: rgba(54, 50, 70, 0.5);
}

#sidebar-wrapper li.nav-item.active>a.nav-link{
  color: #efefef;
  background: #20a8d8;
}

#sidebar-wrapper .navbar-nav a.nav-link:hover{
  margin: 1px 0px;
  padding: 10px 25px;
  color: #efefef;
  background: #20a8d8;
}

#sidebar-wrapper .sidebar .fa{
  padding-left: 15px;
  padding-right: 5px;
}

#sidebar-wrapper .sidebar .fas{
  padding-left: 15px;
  padding-right: 5px;
}

</style>

<div id="wrapper">

<div id="#sidebar-wrapper">
  <ul class="navbar-nav">
    <li class="nav-item " >
      <input type="hidden" name="" id="page" value="<?= $stringA; ?>">
      <h4 class="nav-link text-center" style=" padding-top:30px; ">&nbsp;DASHBOARD</h4>
      <h5 class="nav-link text-center" style="margin-bottom:50px; color:white; ">&nbsp;Welcome <?= ucfirst($_SESSION['userName']); ?> </h5>
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
      <a class="nav-link" href="admin.php?logs"><i class="fa  fa-history"></i>&nbsp; Logs</a>
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
  </ul>
</div>

<div id="#page-content-wrapper">
  <a href="#" class="btn btn-success" id="menu-toggle">Toggle Menu</a>
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

        include('templates/admin-main.php');

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
      ?>

</div>
</div>

<?php include 'footer.php'; ?>

<script>
  $('#menu-toggle').click(function(e){
     e.preventDefault();
     console.log('a');
     $('#wrapper').toggleClass('menuDisplayed');
  });
</script>
