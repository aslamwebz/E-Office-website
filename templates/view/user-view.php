<?php

require_once('../../config.php');


if(isset($_POST['userid'])){
  $userid= $_POST['userid'];
  $sql2 = "SELECT * FROM users WHERE id='$userid'";
  $result2 = $db->query($sql2);
  $user = mysqli_fetch_assoc($result2);
  ?>


  <style>


  </style>


  <div id="user">
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">Edit Profile</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>Company (disabled)</label>
                      <input type="text" class="form-control" disabled="" placeholder="Company" value="Webzone Inc.">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Username" value="<?= $user['username']; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="<?= $user['email']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Company" value="<?= $user['firstname']; ?>">
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" value="<?= $user['lastname']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="<?= $user['address']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1">
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="Country" value="Andrew">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label>Postal Code</label>
                      <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>About Me</label>
                      <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-fill btn-primary">Save</button>
              <a href="admin.php?users" type="submit" class="btn btn-fill btn-primary">Cancel</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="card card-user">
            <div class="card-body">
              <p class="card-text">
                <div class="author">
                  <div class="block block-one"></div>
                  <div class="block block-two"></div>
                  <div class="block block-three"></div>
                  <div class="block block-four"></div>
                    <img class="" height="auto" width="300px" src="<?= $user['userpic']; ?>" alt="...">
                    <br><br>
                    <h5 class="title"><?= $user['firstname'] . ' '.  $user['lastname']; ?></h5>
                  <p class="description">
                    Ceo/Co-Founder
                  </p>
                </div>
              </p>
              <div class="card-description">
                Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
              </div>
            </div>
            <div class="card-footer">
              <div class="button-container">
                <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook"></i>
                </button>
                <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                  <i class="fab fa-google-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>














  <!-- <div id="userTableUpdate">
    <div class="container">
      <div class="section-content">
        <h1 class="text-center">User Info</h1>
        <form action="" method="POST">
          <div class="form-row">
            <div class="col-md-1">
              <label for="User ID" class="">User ID</label>
              <input type="text" style="margin-bottom:40px;" class="form-control col" value="<?= $userOne['id']; ?>" name="id" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <img class="profile-img" src="<?= $userOne['userpic']; ?>" class="img-fluid" alt="">
              <label for="">Profile Pic</label>
              <label for="">Last Name</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['lastname']; ?>" required readonly name="lastname">
              <label for="">Address</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['address']; ?>" required readonly name="address">
            </div>
            <div class="col-md-1"></div>
            <div class="col">
              <label for="username" class="" >Username</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['username']; ?>" required readonly name="username">
              <label for="">Email</label>
              <input type="Email" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['email']; ?>" required readonly name="email">
              <label for="">Permission</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['permission']; ?>" required readonly name="permission">

              <label for="">First Name</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['firstname']; ?>" required readonly name="firstname">

              <label for="">Mobile Number</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['mobile']; ?>" required readonly name="mobile">
              <label for="">Join Date</label>
              <input type="text" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['joindate']; ?>" required readonly name="joindate">
              <!-- <label for="">Password</label>
              <input type="password" class="form-control" style="margin:0px 0 30px 0;" value="<?= $userOne['password']; ?>" required readonly name="password"> -->
            <!-- </div>
          </div>
        </form>
        <a href="user.php?edit=<?= $userOne['id']; ?>" class="button button-primary button-pill "><i class="fa fa-edit">&nbsp;Edit User</i></a>
        <button type="button" onclick="showTable()" class="button button-action button-pill">Cancel</button>
      </div>
    </div>
  </div> -->






<?php } ?>
