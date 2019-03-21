<?php

require_once('config.php');
include 'templates/admin-header.php';
session_start();

is_logged_in('admin', 'Please log in to view that page');

$currentDir = getcwd();
$uploadDirectory = "/img/";

$errors = []; // Store all foreseen and unforseen errors here
$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

if(isset($_GET['delete'])){
  $deleteID = $_GET['delete'];
  if($deleteID != 3){
    $deleteSql = "DELETE FROM users WHERE id = '$deleteID'";
    $db->query($deleteSql);
  header('Location: admin.php?users');
  } else {
    echo 'You cant delete the admin !<br> <a href="admin.php?users">Go Back</a>';
  }
  
}


if(isset($_POST['update'])){
  $userid = $_POST['id'];
  $username = $_POST['username'];
  $permission = $_POST['permission'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $joindate = $_POST['joindate'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];

  if(isset($_FILES['myfile'])){

    include('templates/crud/img-upload.php');

    $updateSql = "UPDATE users SET firstname='$firstname', lastname='$lastname', address='$address',
    email='$email', userpic='$userpic', mobile='$mobile', username='$username', permission='$permission', joindate='$joindate', password='$password' WHERE id='$userid'";

  } else {
    $updateSql = "UPDATE users SET firstname='$firstname', lastname='$lastname', address='$address',
    email='$email', mobile='$mobile', username='$username', permission='$permission', joindate='$joindate', password='$password' WHERE id='$userid'";

  }

  if (!$db->query($updateSql)){
    printf("Errormessage: %s\n", $db->error);
  } else {
    header('Location: admin.php?users');
  };

}

if(isset($_POST['addUser'])){
  $userid = $_POST['id'];
  $username = $_POST['username'];
  $permission = $_POST['permission'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $joindate = $_POST['joindate'];
  $password = encrypt($_POST['password']);
  $mobile = $_POST['mobile'];

  include('templates/crud/img-upload.php');


  $insertSql = "INSERT INTO users VALUES ('','$firstname','$lastname','$address','$email','$userpic','$mobile','$username','$permission','$joindate','$password', '1234')";


  if (!$db->query($insertSql)){
    printf("Errormessage: %s\n", $db->error);
  } else {
    header('Location: admin.php?users');
  };

}

if(isset($_GET['edit'])){

  $id = $_GET['edit'];

  $userSql = "SELECT * FROM users WHERE id='$id'";
  $resultUser = $db->query($userSql);
  $user = mysqli_fetch_assoc($resultUser);

  include('templates/crud/editUser.php');

}

if(isset($_POST['add'])){

  include('templates/crud/addUser.php');

} ?>
