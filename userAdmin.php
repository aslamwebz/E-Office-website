<?php

session_start();

require_once('config.php');
include('templates/admin-header.php');
is_logged_in(2,'Please log in to view that page');
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

  .sidebar-nav{
    padding: 0;
    list-style: none;
  }

  .sidebar-nav{
    text-indent: 20px;
    line-height: 40px;
  }

  .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color:#ddd;
  }

  .sidebar-nav li a:hover{
    background: #168085;
  }

</style>

<div id="wrapper" class=" menuDisplayed">

  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li><a href="#">Account</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <a href="#" class="btn btn-success" id="menu-toggle">Toggle Menu</a>
          <h1>Sidebar Layouts are Cool</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi itaque harum, accusantium qui mollitia aliquam atque, quisquam veritatis aut, unde, officia suscipit debitis! Dolorum, quis ducimus quasi natus asperiores optio iure, et vel perferendis, aut nemo dolore consequatur odio illum ut rerum veritatis ea illo adipisci harum, doloremque voluptatum suscipit. Quod ut eveniet inventore molestias qui cupiditate, consectetur, nam itaque. Officia aliquid, quas officiis quis temporibus quisquam, nemo unde delectus ipsum laboriosam? Minima aspernatur fugit praesentium inventore, cupiditate, id quia perferendis in sequi numquam amet architecto natus aliquid expedita ratione voluptates aliquam. Porro rem, laboriosam ad quasi earum fugiat ipsum incidunt cumque perspiciatis quo molestiae animi nisi facere distinctio architecto nulla eos, delectus repellat. Ad voluptatum, rerum delectus accusamus vel officiis dolorem natus adipisci similique nostrum suscipit eius culpa ipsam, illum architecto tenetur reiciendis ullam animi magni quasi earum nobis sit consequuntur. Earum quas doloremque molestias, ea voluptatem similique ullam, minima eaque temporibus fugiat vel, repellat, expedita possimus amet sint neque. Repellat natus similique quisquam suscipit, officiis beatae voluptas impedit facere optio eaque! Laudantium voluptatem vitae repellendus doloremque iure molestiae unde, perferendis sit ipsa ipsum veniam quo, praesentium inventore quibusdam impedit soluta. Vitae tempore, deserunt, a commodi quos tenetur.</p>
        </div>
      </div>
    </div>
  </div>

</div>





<!-- <div id="admin-panel">
  <div class="row">
    <div class="col-md-2">
      <div class="container">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item " id="welcome" >
            <h4 class="nav-link" style="padding-left:20px; padding-top:30px;">&nbsp;DASHBOARD</h4>
            <h5 class="nav-link" style="margin-bottom:50px; padding-left:20px; ">&nbsp;Welcome <?= ucfirst($_SESSION['userName']); ?> </h5>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="userAdmin.php"><i class="fa fa-lg fa-home "></i>&nbsp;Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userAdmin.php?blogs"><i class="fa  fa-newspaper-o "></i>&nbsp;Blog</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="userAdmin.php?news"><i class="fa  fa-newspaper-o  "></i>&nbsp;News <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userAdmin.php?notes"><i class="fa  fa-tree "></i>&nbsp;Notes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userAdmin.php?messages"><i class="fa  fa-tree "></i>&nbsp;Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa  fa-tree "></i>&nbsp;Requests</a>
          </li>
        </ul>

      </div>
    </div>

    <div class="col-md-10">


      <?php



      if(isset($_GET['news'])){
        include('templates/all-news.php');
      }

      if(isset($_GET['blogs'])){
        include('templates/all-blogs.php');
      }

      if(isset($_GET['notes'])){
        include('templates/all-notes.php');
      }

      if(isset($_GET['messages'])){
        include('templates/all-messages.php');
      }

       ?>
    </div>
  </div>
</div>
 -->

<?php include 'footer.php'; ?>

<!-- Menu toggle script -->

<script>
  $('#menu-toggle').click(function(e){
     e.preventDefault();
     console.log('a');
     $('#wrapper').toggleClass('menuDisplayed');
  });
</script>
