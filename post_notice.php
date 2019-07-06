
<?php include("lib/session.php"); ?>
<?php include("management_header.php"); ?>
<?php

 ?>
<!--form-->
<div class="container mt-3">
  <form action="post_notice_core.php" method="post" class="post-form-custom" enctype="multipart/form-data">
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
  <div class="form-group">
    <label for="file">Upload Picture:</label>
    <input type="file" name="notice_pic" value="">
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
  <a href="view_post_management.php"class="btn btn-primary mt-2 text-white" name="view_post">View/Update Post</a>
</div>
<!--end form-->

<?php include("footer.php"); ?>
