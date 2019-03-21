<?php

require_once('config.php');
include 'templates/admin-header.php';


if(isset($_GET['complete'])){
  $id = $_GET['complete'];
  $date = date('d:m:Y');
  $taskSql3 = "UPDATE tasks SET complete=1, comp_date='$date' WHERE task_id='$id'";
  $db->query($taskSql3);
   redirect('tasks');
}

if(isset($_GET['view'])){
  $id = $_GET['view'];
  $taskSql4 = "SELECT * from tasks WHERE task_id = '$id'";
  $result = $db->query($taskSql4);
  $task = mysqli_fetch_assoc($result);
  include('templates/view/task-view.php');
  ?>

<?php } ?>
