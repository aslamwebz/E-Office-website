<?php


// is_logged_in('admin','Please log in to view that page'); 
$userSql = "SELECT * FROM users";
$resultUser = $db->query($userSql);
?>

<div id="content"></div>

<div class="container-fluid" id="user-table">
  <table class="table table-striped table-bordered" id="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <?php
      while($user=mysqli_fetch_assoc($resultUser)){
        ?>
        <tr>
          <td><?=  $user['id']?></td>
          <input type="hidden" name="" id="idval" value="<?=  $user['id']?>">
          <td><button class="button button-rounded button-primary button-block" style="width:100%;" onclick="getUser(<?= $user['id'] ?>)"><?=  $user['username']?></button></td>
          <td><?=  $user['email']?></td>
          <td><?=  $user['firstname']?></td>
          <td><?=  $user['lastname']?></td>
          <td><a href="password.php?editPassword=<?= $user['id']; ?>" class="button  button-highlight button-box"><i class="fa fa-key"></i></a>
          <td><a href="user.php?edit=<?= $user['id']; ?>" class="button button-action button-box"><i class="fa fa-edit"></i></a>
            <a href="user.php?delete=<?= $user['id']; ?>" class="button button-caution button-box"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <form class="" action="user.php" method="post">
    <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary button-large">Add User</button>
  </form>
</div>

<script type="text/javascript">
function getUser(userid) {
  $('#content').show();
   $('#user-table').hide();
   console.log(userid);
   $.ajax({    //create an ajax request to display.php
       type: "POST",
       url: "templates/view/user-view.php",
       data: {'userid':userid},
       success: function(response){
           $("#content").html(response);
       }
   });
};
function showTable(){
  $('#user-table').show();
  $('#content').hide();
}
</script>
