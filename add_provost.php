<?php include("lib/session.php"); ?>
 <?php include("management_header.php"); ?>
<?php
      include("add_provost_core.php");
?>
   <!--form-->
   <div class="container mt-3">
     <form action="" method="post" class="post-form-custom" enctype="multipart/form-data">
     <div class="form-group">
       <label for="exampleInputEmail1">Name</label>
       <input type="text" class="form-control" name="name">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Postion</label>
       <input type="text" class="form-control" name="position">
     </div>
     <div class="form-group">
       <label for="comment">Description:</label>
       <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Phone Number</label>
       <input type="text" class="form-control" name="phone_number">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Photo</label>
       <input type="file" name="file">
     </div>

     <button type="submit" class="btn btn-primary" name="post_btn">Add Provost</button>
     </form>
     <?php
      if(!empty($errorMsg)){
        echo $errorMsg;
      }
      ?>
   </div>


<?php include("footer.php"); ?>
