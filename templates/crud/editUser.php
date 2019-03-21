<?php


?>

<div id="userTableUpdate">
  <div class="container">
    <div class="section-content">
      <h1 class="text-center">Edit User</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-1">
            <label for="User ID" class="" >User ID</label>
            <input type="text" style="margin-bottom:40px;" class="form-control col" value="<?= $user['id']; ?>" name="id" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="username" class="" >Username</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['username']; ?>" required name="username">
            <label for="">Permission</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['permission']; ?>" required name="permission">
            <label for="">First Name</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['firstname']; ?>" required name="firstname">
            <label for="">Last Name</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['lastname']; ?>" required name="lastname">
            <label for="">Address</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['address']; ?>" required name="address">
          </div>
          <div class="col-md-1"></div>
          <div class="col">
            <label for="">Email</label>
            <input type="Email" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['email']; ?>" required name="email">
            <label for="">Profile Pic</label>
            <input type="file" name="myfile" id="fileToUpload" class="form-control">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['mobile']; ?>" required name="mobile">
            <label for="">Join Date</label>
            <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['joindate']; ?>" required name="joindate">
            <label for="">Password</label>
            <input type="password" class="form-control" style="margin:0px 0 30px 0;" value="<?= $user['password']; ?>" required name="password">
          </div>
        </div>
        <input type="submit" value="Submit" class="button button-primary" name="update">
        <a href="admin.php?users"  class="button button-royal">Cancel</a>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
