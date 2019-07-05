<?php
  include("lib/session.php");
  include("lib/mini_conection.php");
 ?>

<?php include("management_header.php"); ?>
<?php
if(isset($_POST['btn']))
{
 try
 {
  $title = $_REQUEST['title'];

  $image_file = $_FILES["pic"]["name"];
  $type  = $_FILES["pic"]["type"];
  $size  = $_FILES["pic"]["size"];
  $temp  = $_FILES["pic"]["tmp_name"];
  $file_basename=  substr($image_file,0,  strripos($image_file, '.'));//rename file
  $file_ext=  substr($image_file,  strripos($image_file, '.'));
  $f1=uniqid().$file_ext;
  $target_file='slide_show_picture/'.$f1;

  $path="slide_show_picture/".$image_file; //set upload folder path
  if(empty($image_file)){
    $msg="Picture Field Must Not Empty";
  }
 else if($type=="image/jpg" || $type=='image/jpeg') //check file extension
  {
   if(!file_exists($path)) //check file not exist in your upload folder path
   {
    if($size < 5000000) //check file size 5MB
    {
     move_uploaded_file($temp, "slide_show_picture/".$f1); //move upload file temperory directory to your upload folder
    }
    else
    {
     $msg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
    }
   }

  else
  {
   $msg="Upload JPG , JPEG  File Formate.....CHECK FILE EXTENSION"; //error message file extension
  }

  if(!isset($msg)){
      $sql="INSERT INTO tbl_slide_show(pic,title)VALUES('$target_file','$title')";
      $result=mysqli_query($connect,$sql);
      if($result){
        $msg="Successfully Added";
      }
  }


 }
}
 catch(PDOException $e)
 {
  echo $e->getMessage();
 }
}



 ?>

<div class="row">
  <div class="col-lg-9">
    <?php
    if(isset($_REQUEST['msg'])){
        echo $_REQUEST['msg'];
    }
     ?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Picture</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
          $query="SELECT * FROM tbl_slide_show";
          $exe=mysqli_query($connect,$query);
          while($data=mysqli_fetch_assoc($exe)){
            ?>
            <tr>
              <td><?php echo $data['title'] ?></td>
              <td><img src="<?php echo $data['pic'] ?>" width="100" alt=""></td>
              <td><a href="delete_slide_show_pic.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php

          }
         ?>
      </tbody>
    </table>

  </div>
  <div class="col-lg-3">
    <div class="card">
      <div class="card-header">Add Slider Picture</div>
      <div class="card-body">
        <div class="container mt-3">
          <form action="" method="post" class="post-form-custom" enctype="multipart/form-data">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="file" name="pic">
          </div>

          <button type="submit" class="btn btn-primary" name="btn">Add Picture</button>
          </form>
          <?php
           if(!empty($msg)){
             echo $msg;
           }

           ?>
        </div>
      </div>
    </div>

  </div>



</div>

<?php include("footer.php"); ?>
