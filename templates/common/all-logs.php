<?php

require_once('config.php');
$sql = "SELECT * FROM log";
$result = $db->query($sql);


 ?>


<div id="news">
  <div class="container-fluid">
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>LOG ID</th>
          <th>Log Name</th>
          <th>Log Time</th>
          <th>User</th>
          <th>Log</th>
        </tr>
      </thead>
      <tbody>
    <?php while($log = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $log['logid']; ?></td>
        <td><?= $log['logname']; ?></td>
        <td><?= $log['logdate']; ?></td>
        <td><?= $log['user']; ?></td>
        <td><?= $log['log']; ?></td>
        </td>
      </tr>
    <?php endwhile; ?>
      </tbody>
  </table>
  </div>
</div>
