<?php
  if(isset($_REQUEST['update_btn'])){
    if(empty($_REQUEST['title']) || empty($_REQUEST['author']) || empty($_REQUEST['description'])){
     $msg="Field must not be Empty";
    }
    else{
      $title=$_REQUEST['title'];
      $author= $_REQUEST['author'];
      $description=$_REQUEST['description'];
      $id=$_REQUEST['id'];

      spl_autoload_register(function($class){
          include("class/".$class.".php");
        });
        $post=new PostNotice();
        $result=$post->update_notice($title,$author,$description,$id);
        if($result){
          header("location:view_post_management.php");
        }
        else {
         $msg="Not Update";
        }

    }
  }
 ?>
