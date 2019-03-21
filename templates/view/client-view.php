<?php

require_once('../../config.php');


if(isset($_POST['clientid'])){
  $clientid= $_POST['clientid'];
  $sql2 = "SELECT * FROM client WHERE id='$clientid'";
  $result2 = $db->query($sql2);
  $client = mysqli_fetch_assoc($result2);
  ?>

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
                      <input type="text" class="form-control" placeholder="Username" value="<?= $client['username']; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="<?= $client['email']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Company" value="<?= $client['firstname']; ?>">
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" value="<?= $client['lastname']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="<?= $client['client_address']; ?>">
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
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>About Me</label>
                      <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
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
        <!-- <div class="col-md-4 text-center">
          <div class="card card-user">
            <div class="card-body">
              <p class="card-text">
                <div class="author">
                  <div class="block block-one"></div>
                  <div class="block block-two"></div>
                  <div class="block block-three"></div>
                  <div class="block block-four"></div>
                    <img class="" height="auto" width="300px" src="<?= $client['userpic']; ?>" alt="...">
                    <br><br>
                    <h5 class="title"><?= $client['firstname'] . ' '.  $client['lastname']; ?></h5>
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
        </div> -->
      </div>
    </div>
  </div>


<?php } ?>
