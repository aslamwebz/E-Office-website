<?php

require_once('config.php');

$taskSql = "SELECT * from tasks WHERE complete = '0'";
$result = $db->query($taskSql);



?>



<div id="blog">
  <div class="container-fluid">
    <h2 class="text-center">Current Tasks</h2>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Task ID</th>
          <th>Task Name</th>
          <th>Task</th>
          <th>Taskdate</th>
          <th>Duedate</th>
          <th>Task Owner</th>
          <th>Completion</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
    <?php while($tasks = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $tasks['task_id']; ?></td>
        <td><?= $tasks['task_name']; ?></td>
        <td><a href="tasks.php?view=<?= $tasks['task_id']; ?>" class="button button-primary">View Task</a></td>
        <td><?= $tasks['task_date']; ?></td>
        <td><?= $tasks['due_date']; ?></td>
        <td><?= $tasks['owner']; ?></td>
        <td><?= (($tasks['complete'] == 0)?'Not Completed':'Complete') ?></td>
        <td><a href="tasks.php?complete=<?= $tasks['task_id']; ?>" class="button button-action">Done</a></td>
      </tr>
    <?php endwhile; ?>
      </tbody>
  </table>
  <form class="" action="tasks.php" method="post">
    <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary button-large">Add Task</button>
  </form>

  </div>
</div>

<?php



$taskSql2 = "SELECT * from tasks WHERE complete = '1'";
$result2 = $db->query($taskSql2);

?>



<div id="blog">
  <div class="container-fluid">
    <h2 class="text-center">Completed Tasks</h2>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Task ID</th>
          <th>Task Name</th>
          <th>Task</th>
          <th>Taskdate</th>
          <th>Duedate</th>
          <th>Completion Date</th>
          <th>Task Owner</th>
          <th>Completion</th>
        </tr>
      </thead>
      <tbody>
    <?php while($tasksComp = mysqli_fetch_assoc($result2)): ?>
      <tr>
        <td><?= $tasksComp['task_id']; ?></td>
        <td><?= $tasksComp['task_name']; ?></td>
        <td><a href="tasks.php?view=<?= $tasksComp['task_id']; ?>" class="button button-primary">View Task</a></td>
        <td><?= $tasksComp['task_date']; ?></td>
        <td><?= $tasksComp['due_date']; ?></td>
        <td><?= $tasksComp['comp_date']; ?></td>
        <td><?= $tasksComp['owner']; ?></td>
        <td><?= (($tasksComp['complete'] == 0)?'Not Completed':'Complete') ?></td>
      </tr>
    <?php endwhile; ?>
      </tbody>
  </table>


  </div>
</div>
