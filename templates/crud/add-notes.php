<!DOCTYPE html>
<?php require_once('templates/admin-header.php'); ?>





<div id="addNote" class="container">
  <div class="row section-content">
    <div class="col-md-12">
        <form class="form-control" action="" method="post">
          <input type="hidden" name="authorID" value="<?= $_SESSION['userID']; ?>">
          <input type="hidden" name="postdate" value="<?= date('d:m:Y'); ?>">
          <label for="news">Note</label>
          <textarea name="note" class="form-control" style="width: 100%;" rows="20">Next, use our Get Started docs to setup Tiny!</textarea>
          <br>
          <input type="submit" value="Add Note" class="button button-primary" name="addNote">
          <a href="<?= (($_SESSION['permission'] == 1)?'admin.php?notes':'userAdmin.php?notes') ?>"  class="button button-royal">Cancel</a>
        </form>
    </div>
  </div>
</div>



  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
  </script>
