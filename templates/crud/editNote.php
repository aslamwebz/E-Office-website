<?php


?>

<div id="editNote" class="container">
  <div class="row section-content">
    <div class="col-md-12">
        <form class="form-control" action="" method="post">
          <input type="hidden" name="userID" value="<?= $note['userid']; ?>">
          <input type="hidden" name="postdate" value="<?= date('d:m:Y'); ?>">
          <label for="news">Note</label>
          <textarea name="note" class="form-control" style="width: 100%;" rows="20"><?= $note['note']; ?></textarea>
          <br>
          <input type="submit" value="Edit Note" class="button button-primary" name="editNote">
          <a href="<?= (($_SESSION['permission'] == 1)?'admin.php?notes':'userAdmin.php?notes') ?>"  class="button button-royal">Cancel</a>
        </form>
    </div>
  </div>
</div>



  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
  </script>
