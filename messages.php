<?php
require_once 'config.php';
include 'templates/admin-header.php';
session_start();

if (isset($_POST['send'])) {
    $title = $_POST['title'];
    $cc = $_POST['cc'];
    $message = $_POST['message'];
    $sender = $_SESSION['email'];
    $date = date('d:m:Y');
    $receiver = $_POST['receiver'];
    $messageSql = "INSERT INTO message VALUES ('','$date', '$title', '$message','$sender','$receiver', '$cc', '')";
    $db->query($messageSql);
    redirect(messages);
}

if (isset($_POST['submit'])) {
?>


<div id="email">
<div class="container" style="padding:50px;">
<form action="" class="form-group" method="post">
    <div class="row">
        <div class="col-md-6">
            <!-- <label for="">From:</label> -->
            <!-- <label for="" class="form-control" name='from'></label> -->
            <!-- <label for="">Date:</label> -->
            <label for="">TO:</label>
            <input type="email" class="form-control" name='receiver' required></input>
            <label for="">Title:</label>
            <input type="text" class="form-control" name='title' required></input>
            <label for="">CC:</label>
            <input type="email" class="form-control" name='cc' required></input>
        </div>
        <br>
        <div class="col-md-8" style="margin-top:10px;">
            <label for="">Message:</label>
            <textarea name="message" rows="6" cols="115" style="margin-left:0;" placeholder="Enter Your Message" required></textarea>
            <br>
            <button type="submit" name="send" class="button button-primary">Send Message</button>
        </div>
    </div>
</form>
</div>
</div>

<?php }?>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>