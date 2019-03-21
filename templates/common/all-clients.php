<?php

is_logged_in('admin','Please log in to view that page'); 
$clientSql = "SELECT * FROM client";
$resultClient = $db->query($clientSql);
?>

<div id="content"></div>

<div class="container-fluid" id="client-table">
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
      while($client=mysqli_fetch_assoc($resultClient)){
        ?>
        <tr>
          <td><?=  $client['id']?></td>
          <input type="hidden" name="" id="idval" value="<?=  $client['id']?>">
          <td><button class="button button-rounded button-primary button-block" style="width:100%;" onclick="getclient(<?= $client['id'] ?>)"><?=  $client['username']?></button></td>
          <td><?=  $client['email']?></td>
          <td><?=  $client['firstname']?></td>
          <td><?=  $client['lastname']?></td>
          <td><a href="password.php?editPassword=<?= $client['id']; ?>" class="button  button-highlight button-box"><i class="fa fa-key"></i></a>
          <td><a href="client.php?edit=<?= $client['id']; ?>" class="button button-action button-box"><i class="fa fa-edit"></i></a>
            <a href="client.php?delete=<?= $client['id']; ?>" class="button button-caution button-box"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <form class="" action="client.php" method="post">
    <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary button-large">Add client</button>
  </form>
</div>

<script type="text/javascript">
function getclient(clientid) {
  $('#content').show();
   $('#client-table').hide();
   console.log(clientid);
   $.ajax({    //create an ajax request to display.php
       type: "POST",
       url: "templates/view/client-view.php",
       data: {'clientid':clientid},
       success: function(response){
           $("#content").html(response);
       }
   });
};
function showTable(){
  $('#client-table').show();
  $('#content').hide();
}
</script>
