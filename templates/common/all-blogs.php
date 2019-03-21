<?php

require_once('config.php');

if($_SESSION['permission'] == 'admin'){
  $sql = "SELECT * from posts";
  $result = $db->query($sql);
} else {
  $id = (int)$_SESSION['userID'];
  $sql2 = "SELECT * FROM posts WHERE userid='$id'";
  $result = $db->query($sql2);
}

?>

<div id="blog">
  <div class="container">
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Post ID</th>
          <th>Post Date</th>
          <th>Post Title</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php while($blog = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $blog['id']; ?></td>
          <td><?= $blog['postdate']; ?></td>
          <td><?= $blog['title']; ?></td>
          <td><a href="blog.php?edit=<?= $blog['id']; ?>" class="button button-action button-box"><i class="fa fa-edit"></i></a>
            <a href="blog.php?delete=<?= $blog['id']; ?>" class="button button-caution button-box"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      <?php endwhile; ?>
      </tbody>
  </table>
  <form class="" action="blog.php" method="post">
    <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary button-large">Add Post</button>
  </form>
  </div>
</div>
