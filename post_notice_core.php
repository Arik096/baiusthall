<?php
  include("lib/session.php");
  include("lib/mini_conection.php");
  if(isset($_REQUEST['post_btn'])){
    if(empty($_REQUEST['title']) || empty($_REQUEST['author']) || empty($_REQUEST['description'])){
      header("location:post_notice.php?msg=Field Must not be empty");
    }
    else{
      $title=$_REQUEST['title'];
      $author= $_REQUEST['author'];
      $description=$_REQUEST['description'];

      $image_file = $_FILES["notice_pic"]["name"];
      $type  = $_FILES["notice_pic"]["type"]; //file name "txt_file"
      $size  = $_FILES["notice_pic"]["size"];
      $temp  = $_FILES["notice_pic"]["tmp_name"];
      $file_basename=  substr($image_file,0,  strripos($image_file, '.'));//rename file
      $file_ext=  substr($image_file,  strripos($image_file, '.'));
      $f1=uniqid().$file_ext;
      $target_file='notice_picture/'.$f1;

      spl_autoload_register(function($class){
          include("class/".$class.".php");
        });
        $post=new PostNotice();
        $result=$post->post_notice($title,$author,$description);


        if(($type=="image/jpg" || $type=='image/jpeg') && $result==true){
         if(!file_exists($target_file)){
          if($size < 5000000) //check file size 5MB
          {

           move_uploaded_file($_FILES['notice_pic']['tmp_name'], 'notice_picture/'.$f1);
           $sql="SELECT MAX(id) FROM notice_board";
           $query=mysqli_query($connect,$sql);
           $data=mysqli_fetch_assoc($query);
           $last_id =$data["MAX(id)"];
           $sql="UPDATE notice_board SET pic='$target_file' WHERE id=$last_id";
           $sql_test=mysqli_query($connect,$sql);

         }
         else{
           header("location: post_notice.php?msg=Your File To large Please Upload 5MB Size");
         }
       }
     }
     else
     {
      header("location:post_notice.php?msg=Upload JPG , JPEG  File Formate.....CHECK FILE EXTENSION"); //error message file extension
     }

        if($result){

          header("location:post_notice.php?msg=Posted");
        }
        else {
          header("location:post_notice.php?msg=Not Posted");
        }

    }
  }
 ?>
