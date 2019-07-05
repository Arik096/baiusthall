<?php

include("lib/mini_conection.php");

  $id=$_REQUEST['id'];
  $query="SELECT * FROM tbl_slide_show WHERE id='$id'";
  $exe=mysqli_query($connect,$query);
  $data=mysqli_fetch_assoc($exe);
  $remove_pic=$data['pic'];

  $sql="DELETE FROM tbl_slide_show WHERE id='$id'";
  $result=mysqli_query($connect,$sql);
  if($result){

    unlink($remove_pic);
    header("location:edit_slide_show.php?msg=Deleted");
  }


 ?>
