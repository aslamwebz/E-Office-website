<div id="blog">
  <div class="container">
    <h2 class="display-4 text-center">Task Details</h2>
    <br>
    <div class="row">
    <div class="col-md-4">
      <label for="">Task Name</label>
      <label for="" class="form-control"><?= $task['task_name'];  ?></label>
      <label for="">Task Date</label>
      <label for="" class="form-control"><?= $task['task_date'];  ?></label>
      <label for="">Due Date</label>
      <label for="" class="form-control"><?= $task['due_date'];  ?></label>
      <label for="">Task Owner</label>
      <label for="" class="form-control"><?= $task['owner'];  ?></label>
      <?php if( !$task['complete']): ?>
        <label for="">Task Completion Status</label>
        <label for="" class="form-control">Not Completed</label>
      <?php else: ?>
        <label for="">Task Completion Status</label>
        <label for="" class="form-control">Completed</label>
        <label for="">Task Completion Date</label>
        <label for="" class="form-control"><?=  $task["comp_date"]; ?></label>
      <?php endif; ?>
      <form class="" action="admin.php?tasks" method="post">
        <?php if( !$task['complete']): ?>
        <td><a href="tasks.php?complete=<?= $tasks['task_id']; ?>" class="button button-action  button-rounded">Mark Complete</a></td>
        <?php endif; ?>
        <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary ">Cancel</button>
      </form>
    </div>
    <div class="col-md-8">
      <textarea name="name" rows="7" cols="80" disabled><?= $task['task'];  ?></textarea>

    </div>
    </div>



  </div>
</div>
