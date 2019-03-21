<?php
include 'header.php';
 ?>

<div id="contact-us">
  <div class="container">
    <h2 class="heading-4 text-center">SEND US A MESSAGE</h2>
    <br>
    <div class="">
      <form class="form-group" action="" method="post">
        <input type="text" class="form-control" name="Name" placeholder="Name">
        <input type="text" class="form-control" name="Email" placeholder="Email">
        <input type="text" class="form-control" name="Phone" placeholder="Phone">
        <textarea type="text" class="form-control" name="Message" placeholder="Message" rows="5"></textarea>
        <div class="center">
          <button class="button button-raised button-primary button-pill button-large">SEND</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
