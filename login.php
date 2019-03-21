<?php

require_once('config.php');
require_once('templates/admin-header.php');
session_start();

if(isset($_POST['submit'])){
  if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $db->query($sql);
    if(mysqli_num_rows($result) > 0){
      $user = mysqli_fetch_assoc($result);
    }else{
      $sql = "SELECT * FROM client WHERE username='$username'";
      $result = $db->query($sql);
      $user = mysqli_fetch_assoc($result);
    }

    
    if(password_verify($password, $user['password'])){
      $id = (int)$user['id'];
      $_SESSION['userID'] = $id;
      $_SESSION['userName'] = $user['username'];
      $_SESSION['permission'] = $user['permission'];
      $_SESSION['email'] = $user['email'];

      setLog('userlogin', $user['username'], 'User has been logged in', $db);

      if($user['permission'] === 'admin'){
        header('Location: admin.php');
      } elseif($user['permission'] === 'employee') {
        header('Location: employee.php');
      }elseif($user['permission'] === 'client' && isset($_SESSION['cart'])) {
        header('Location: orders.php');
      }elseif($user['permission'] === 'client'){
        header('Location: client.php');
      } else {
      $_SESSION['error'] = 'Please Check Your credentials';
    }
  }
      $_SESSION['error'] = 'Username or Password Error';
}
}

?>

<div class="container-fluid" id="login-page">
  <div id="login-form">
    <div class="container">
      <div class=" col-md-8 offset-md-2">
        <?php
        if(isset($_SESSION['error'])) { 
          echo '<div id="error"><h3>'.$_SESSION['error'].'</h3></div>';
        	unset($_SESSION['error']);
        }
         ?>
        <form action="" method="post" class="form-group">
          <input type="text" class="form-control sm-mar" placeholder="Username" required name="username">
          <input type="password" class="form-control sm-mar" placeholder="Password" required name="password">
          <button class="button button-glow button-rounded button-raised button-primary" name="submit">Login</button>
          <a href="register.php" class="button button-glow button-rounded button-raised button-action">Register</a>
          <a href="index.php" class="button button-glow button-rounded button-raised button-highlight">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'templates/footer_scripts.php'; ?>
