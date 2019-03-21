<?php
require_once 'config.php';
session_start();

if (isset($_GET['logout'])) {
    setLog('userlogout', $_SESSION['userName'], 'User has been logged out', $db);
    logout();
}

// URL Get
$stringA = $_SERVER['REQUEST_URI'];
$stringA = str_replace('/eoffice/', '', $stringA);
$stringA = str_replace('.php', '', $stringA);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>EOffice</title>
</head>
<body>

<?php if ($_SERVER["REQUEST_URI"] == '/eoffice/index.php') {?>

    <nav class="navbar navbar-expand-lg navbar-fixed-top <?=(($_SERVER["REQUEST_URI"] == '/eoffice/index.php') ? 'navbar-transparent ' : 'color-a');?> page-scroll" id="navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#startupNavbar" aria-controls="startupNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input type="hidden" name="" id="page" value="<?=$stringA;?>">
      <a class="navbar-brand" href="#" id="navbar-brand"><span style="color:lightblue;">BUSINESS </span>LOGO</a>
      <div class="collapse navbar-collapse" id="startupNavbar">
         <ul class="navbar-nav ml-auto mt-4 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">SERVICES</a>
          </li>

          <li class="nav-item" style="margin-right: 10px;">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <?php 
            include('widgets/name.php');
           ?>
        </ul>
      </div>
    </nav>

  <?php } else {?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="navbar1">
      <a class="navbar-brand" href="index.php">EOffice</a>
      <input type="hidden" name="" id="page" value="<?=$stringA;?>">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto mt-4 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">SERVICES</a>
          </li>
          <?php if ($_SERVER["REQUEST_URI"] != '/eoffice/login.php') {?>
            <li class="nav-item" style="margin-left:20px; margin-top:7px;">
            </li>
          <?php }?>
        </ul>
      </div>
    </nav>
<?php }?>

<div id="top"></div>

  </div>
</div>