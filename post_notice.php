
<?php include("session.php"); ?>
<?php include("management_header.php"); ?>
<?php

 ?>
<!--form-->
<div class="container mt-3">
  <form action="post_notice_core.php" method="post" class="post-form-custom">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Select Author</label>
    <select name="author">
      <option value="Provost">Provost</option>
      <option value="Assistant Provost">Assistant Provost</option>
      <option value="Volenteer">Volenteer</option>
      <option value="Manager">Manager</option>
</select>
  </div>
  <div class="form-group">
    <label for="comment">Notice Description:</label>
    <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="post_btn">Post</button>
  </form>
  <div>
    <?php
      if(isset($_REQUEST["msg"])){
        echo $_REQUEST["msg"];
      }
     ?>
  </div>
</div>
<!--end form-->
<?php include("footer.php"); ?>
<?php include("cdn.php"); ?>
