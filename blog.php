<?php

require_once('config.php');
include 'templates/admin-header.php';
session_start();

if(isset($_GET['delete'])){
  $deleteID = $_GET['delete'];
  $deleteSql = "DELETE FROM posts WHERE id = '$deleteID'";
  $db->query($deleteSql);
  redirect('blogs');
}

if(isset($_POST['addBlog'])){
  $title = $_POST['title'];
  $content = $_POST['post'];
  $authorID = $_POST['authorID'];
  $postDate = $_POST['postdate'];
  $postSql = "INSERT INTO posts VALUES('', '$content', '$authorID','$title','$postDate')";
  if (!$db->query($postSql)){
    printf("Errormessage: %s\n", $db->error);
  } else {
    setLog('Blog Add', $_SESSION['userName'], 'Blog post added', $db);
     redirect('blogs');
  };
}

if(isset($_GET['edit'])){
  $blogEditId = $_GET['edit'];
  $blogEditSql = "SELECT * FROM posts WHERE id = '$blogEditId'";
  $blogResult = $db->query($blogEditSql);
  $blog = mysqli_fetch_assoc($blogResult);
  include('templates/crud/edit-blog.php');
}

if(isset($_POST['editBlog'])){
  $postID = $_GET['edit'];
  $title = $_POST['title'];
  $post = $_POST['post'];
  $userid = $_POST['userID'];
  $postDate = $_POST['postdate'];
  $updateBlogSql = "UPDATE posts SET title='$title', post='$post', userid='$userID', postdate='$postDate' WHERE id='$postID'";

    if (!$db->query($updateBlogSql)){
      printf("Errormessage: %s\n", $db->error);
    } else {
      setLog('Blog Edit', $_SESSION['userName'], 'Blog post edit', $db);
       redirect('blogs');
    };
}

 if(isset($_POST['add'])){
  include('templates/crud/add-blog.php');
}

include 'templates/footer_scripts.php'; ?>
