<?php

?>
<div id="userTable">
  <div class="container">
    <div class="section-content">
      <h1 class="text-center" style="margin:40px;">Add User</h1>
      <form action="" enctype="multipart/form-data" method="POST">
        <div class="form-row">
          <div class="col">
            <label for="username" class="" >Username</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="username">
            <label for="">Permission</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="permission">
            <label for="">First Name</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="firstname">
            <label for="">Last Name</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="lastname">
            <label for="">Address</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="address">
          </div>
          <div class="col-md-1"></div>
          <div class="col">
            <label for="">Email</label>
            <input type="Email" class="form-control" style="margin:0px 0 30px 0;"   required name="email">
            <label for="">Profile Pic</label>
            <input type="file" name="myfile" id="fileToUpload" class="form-control" required>
            <label for="">Mobile Number</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"   required name="mobile">
            <label for="">Join Date</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;"  value="<?= date('d:m:Y'); ?>" required name="joindate">
            <label for="">Password</label>
            <input type="password" class="form-control" style="margin:0px 0 30px 0;"  required name="password">
          </div>
        </div>
        <input type="submit" value="Add User" class="button button-primary" name="addUser">
        <a href="admin.php?users"  class="button button-royal">Cancel</a>
      </form>
    </div>
  </div>
</div>
