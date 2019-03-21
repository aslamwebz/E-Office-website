<div id="blog">
  <div class="container">
    <h2 class="display-4 text-center">Note Details</h2>
    <br>
    <div class="row">
    <div class="col-md-4">
      <label for="">Note ID</label>
      <label for="" class="form-control"><?= $note['id'];  ?></label>
      <label for="">Note Date</label>
      <label for="" class="form-control"><?= $note['postdate'];  ?></label>
      <label for="">Note User</label>
      <label for="" class="form-control"><?= $note['userid'];  ?></label>
      <form class="" action="admin.php?notes" method="post">
        <button type="submit" style="margin:40px 0;" name="add" class="button  button-rounded button-primary ">Cancel</button>
      </form>
    </div>
    <div class="col-md-8">
      <textarea name="name" rows="7" cols="80" disabled><?= $note['note'];  ?></textarea>
    </div>
    </div>

  </div>
</div>
