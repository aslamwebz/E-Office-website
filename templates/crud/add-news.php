<!DOCTYPE html>
<?php require_once('templates/admin-header.php'); ?>





<div id="addNews" class="container">
  <div class="row section-content">
    <div class="col-md-12">
        <form class="form-control" action="" method="post">
          <input type="hidden" name="authorID" value="<?= $_SESSION['userID']; ?>">
          <input type="hidden" name="postdate" value="<?= date('d:m:Y'); ?>">
          <label for="title">Post Title</label>
          <input type="text" name="title" value="" class="form-control">
          <label for="news">Post Content</label>
          <textarea name="post" class="form-control" style="width: 100%;" rows="20">Next, use our Get Started docs to setup Tiny!</textarea>
          <br>
          <input type="submit" value="Add News" class="button button-primary" name="addNews">
          <a href="<?= (($_SESSION['permission'] == 1)?'admin.php?news':'userAdmin.php?news') ?>"  class="button button-royal">Cancel</a>

        </form>
    </div>
  </div>
</div>



  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
  </script>
