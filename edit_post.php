<?php include("lib/session.php"); ?>
<?php include("management_header.php"); ?>
<!--main-->
<?php
  require_once("lib/mini_conection.php");
  $id=$_REQUEST['id'];
  $sql="select * from notice_board where id=$id";
  $result=mysqli_query($connect,$sql);
  include("edit_post_core.php");
  while($value=mysqli_fetch_assoc($result)){
    ?>
    <!--form-->
    <div class="container mt-3">
      <form action="" method="post" class="post-form-custom" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $value['title']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Select Author</label>
        <select name="author" value="<?php echo $value['author']; ?>">
          <option value="<?php echo $value['author']; ?>"><?php echo $value['author']; ?></option>
          <option value="Provost">Provost</option>
          <option value="Assistant Provost">Assistant Provost</option>
          <option value="Volenteer">Volenteer</option>
          <option value="Manager">Manager</option>
    </select>
      </div>
      <div class="form-group">
        <label for="comment">Notice Description:</label>
        <textarea class="form-control" rows="5" id="comment" name="description"><?php echo $value['description']; ?></textarea>
      </div>
      <div class="form-group">
        <label for="file">Update Picture:</label>
        <input type="file" name="notice_pic" value="">
      </div>
      <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
      </form>
      <div>
        <?php
          if(!empty($msg)){
            echo $msg;
          }
         ?>
      </div>
    </div>
    <!--form close-->
    <?php
  }
 ?>

<!--main end-->
 <?php include("footer.php"); ?>
