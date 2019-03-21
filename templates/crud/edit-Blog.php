<?php


?>

<div id="editBlog" class="container">
  <div class="row section-content">
    <div class="col-md-12">
        <form class="form-control" action="" method="post">
          <input type="hidden" name="userID" value="<?= $blog['userid']; ?>">
          <input type="hidden" name="postdate" value="<?= date('d:m:Y'); ?>">
          <label for="title">Post Title</label>
          <input type="text" name="title" value="<?= $blog['title']; ?>" class="form-control">
          <label for="news">Post Content</label>
          <textarea name="post" class="form-control" style="width: 100%;" rows="20"><?= $blog['post']; ?></textarea>
          <br>
          <input type="submit" value="Add News" class="button button-primary" name="editBlog">
          <a href="admin.php?news"  class="button button-royal">Cancel</a>
        </form>
    </div>
  </div>
</div>



  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
  </script>
