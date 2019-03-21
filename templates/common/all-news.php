<?php

require_once('config.php');
if($_SESSION['permission'] == 1){
  $sql = "SELECT * from news";
  $result = $db->query($sql);
} else {
  $id = (int)$_SESSION['userID'];
  $sql2 = "SELECT * FROM news WHERE userid='$id'";
  $result = $db->query($sql2);
}


 ?>


<div id="news">
  <div class="container">
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>News ID</th>
          <th>Post Date</th>
          <th>Post Title</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    <?php while($news = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $news['id']; ?></td>
        <td><?= $news['postdate']; ?></td>
        <td><?= $news['title']; ?></td>
        <td><a href="news.php?edit=<?= $news['id']; ?>" class="button button-action button-box"><i class="fa fa-edit"></i></a>
          <a href="news.php?delete=<?= $news['id']; ?>" class="button button-caution button-box"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    <?php endwhile; ?>
      </tbody>
  </table>
  <form class="" action="news.php" method="post">
    <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary button-large">Add News</button>
  </form>
  </div>
</div>
