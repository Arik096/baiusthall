
   <?php include("management_header.php"); ?>
   <?php
   include("lib/session.php");
   include("lib/mini_conection.php");
   $id=$_REQUEST['id'];
   $query="select * from tbl_hr where id=$id";
   $result=mysqli_query($connect,$query);
   $data=mysqli_fetch_assoc($result);
   include("edit_volanteer_core.php");
    ?>
   <!--form-->
   <div class="container mt-3">
     <form action="" method="post" class="post-form-custom" enctype="multipart/form-data">
     <div class="form-group">
       <label for="exampleInputEmail1">Name</label>
       <input type="text" class="form-control" name="name" value="<?php echo $data['name'];?>">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Position</label>
       <input type="text" class="form-control" name="position" value="<?php echo $data['position'];?>">
     </div>
     <div class="form-group">
       <label for="comment">Description:</label>
       <textarea class="form-control" rows="5" id="comment" name="description"><?php echo $data['description'];?></textarea>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Phone Number</label>
       <input type="text" class="form-control" name="phone_number" value="<?php echo $data['phn_num'];?>">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Photo</label>
       <input type="file" name="file" value="<?php echo $data['pic'];?>">
       <div><img width="20%" style="border-radius:100%;" class="mt-2"  src="management_picture/<?php echo $data['pic'];?>" alt=""></div>
     </div>

     <button type="submit" class="btn btn-primary" name="post_btn">Update</button>
     </form>
     <?php
      if(!empty($errorMsg)){
        echo $errorMsg;
      }
      ?>
   </div>


   <?php include("footer.php"); ?>
