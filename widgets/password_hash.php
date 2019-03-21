<?php


?>
<div id="hash">
    <div class="container">
    <h2 class="text-center">Password Hashing</h2>
        <form action="" method="post" class="form-group">
            <input type="text" placeholder="enter password" name='password' class="form-control">
            <br>
            <button type="submit" class="button button-primary" name="submit">Submit</button>
        </form>
       
    </div>
</div>


<?php

if(isset($_POST["submit"])){
    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
    ?>
        <h4>Encrypted password</h4>
         <label for="">Hashed Value</label>
         <input type="text" class="form-control" disabled value="<?=  $hashed ?>">
    <?php } ?>