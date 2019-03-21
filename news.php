<?php

require_once('config.php');
include 'templates/admin-header.php';
session_start();


if(isset($_GET['delete'])){
  $deleteID = $_GET['delete'];
  $deleteSql = "DELETE FROM news WHERE id = '$deleteID'";
  $db->query($deleteSql);
      redirect('news');
}


if(isset($_POST['addNews'])){
  $title = $_POST['title'];
  $content = $_POST['post'];
  $authorID = $_POST['authorID'];
  $postDate = $_POST['postdate'];
  $newsSql = "INSERT INTO news VALUES('','$title', '$content', '$authorID', '$postDate')";
  if (!  $db->query($newsSql)){
    printf("Errormessage: %s\n", $db->error);
  } else {
    setLog('News Add', $_SESSION['userName'], 'News added', $db);
      redirect('news');

  };
}

if(isset($_GET['edit'])){
  $newsEditId = $_GET['edit'];
  $newsEditSql = "SELECT * FROM news WHERE id = '$newsEditId'";
  $newsResult = $db->query($newsEditSql);
  $news = mysqli_fetch_assoc($newsResult);
  include('templates/crud/editNews.php');
}

if(isset($_POST['editNews'])){
  $postID = $_GET['edit'];
  $title = $_POST['title'];
  $post = $_POST['post'];
  $userid = $_POST['userID'];
  $postDate = $_POST['postdate'];
  $updateNewsSql = "UPDATE news SET title='$title', post='$post', userid='$userID', postdate='$postDate' WHERE id='$postID'";

    if (!$db->query($updateNewsSql)){
      printf("Errormessage: %s\n", $db->error);
    } else {
      setLog('News Edit', $_SESSION['userName'], 'News Edit', $db);
      redirect('news');
    };
}

?>

<?php

 if(isset($_POST['add'])){
  include('templates/crud/add-news.php');
}
 ?>




 <?php include 'templates/footer_scripts.php'; ?>
