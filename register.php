<?php
require_once('config.php');
include('header.php');

?>

<div id="register">
  <div class="container">
      <h1 class="text-center" style="margin:40px;">Register With Us</h1>
      <form action="templates/crud/account.php" method="POST" class="form-group">
        <div class="row">
          <div class="col-md-6">
            <input type="hidden" class="form-control" style="margin:0px 0 30px 0;"   value="<?=  date('d-m-Y'); ?>"required name="joindate">
            <input type="hidden" class="form-control" style="margin:0px 0 30px 0;" value="client" required name="permission">
            <label for="username" class="" >Username</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="username">
            <label for="">First Name</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="firstname">
            <label for="">Last Name</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="lastname">
     <label for="">Mobile Number</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="mobile">
          </div>
          <div class="col-md-6">
            <label for="">Email</label>
            <input type="email" class="form-control" style="margin:0px 0 30px 0;"   required name="email">
            <label for="">Confirm Email</label>
            <input type="email" class="form-control" style="margin:0px 0 30px 0;"   required name="confirmEmail">
       
            <label for="">Password</label>
            <input type="password" class="form-control" style="margin:0px 0 30px 0;"  required name="password">
             <label for="">Confirm Password</label>
            <input type="password" class="form-control" style="margin:0px 0 30px 0;"  required name="confirmPassword">
          </div>
            <div class="col-md-12">
              <label for="">Address</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="address">
            </div>
        </div>
        <input type="submit" value="Register" class="button button-primary" name="register">
        <a href="index.php"  class="button button-royal">Cancel</a>
      </form>
  </div>
</div>

<?php include 'footer.php'; ?>
