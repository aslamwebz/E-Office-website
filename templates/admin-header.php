<?php



if(isset($_GET['logout'])){
  unset($_SESSION['userID']);
  unset($_SESSION['userName']);
  unset($_SESSION['permission']);
  session_destroy() ;
  header('Location: login.php');
}

$stringA = $_SERVER['REQUEST_URI'];
$stringA = str_replace('/eoffice/','', $stringA);
$stringA = str_replace('.php','', $stringA);
$stringA = str_replace('admin?','', $stringA);
$stringA = ucfirst($stringA);
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" type="text/css" href="templates/style-admin.css">

  <title>EOffice Admin</title>

</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="navbar1">
      <a class="navbar-brand" href="index.php">EOffice</a>
      <input type="hidden" name="" id="page" value="<?= $stringA; ?>">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto mt-4 mt-lg-0">
          <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="post" action="search.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form> -->
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i> Help
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="tickets.php?add">Submit a ticket</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activity Log</a>
              <div class="dropdown-divider"></div>
              <?php if($_SERVER["REQUEST_URI"] != '/eoffice/login.php'){ ?>
                  <a class="dropdown-item" href="header.php?logout">LOGOUT</a>
              <?php } ?>
            </div>
          </li>

        </ul>
      </div>
    </nav>


<div id="top"></div>