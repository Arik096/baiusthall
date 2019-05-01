<?php
  if(isset($_REQUEST['post_btn'])){
    if(empty($_REQUEST['title']) || empty($_REQUEST['author']) || empty($_REQUEST['description'])){
      header("location:post_notice.php?msg=Field Must not be empty");
    }
    else{
      $title=$_REQUEST['title'];
      $author= $_REQUEST['author'];
      $description=$_REQUEST['description'];

      spl_autoload_register(function($class){
          include("class/".$class.".php");
        });
        $post=new PostNotice();
        $result=$post->post_notice($title,$author,$description);
        if($result){
          header("location:post_notice.php?msg=Posted");
        }
        else {
          header("location:post_notice.php?msg=Not Posted");
        }

    }
  }
 ?>
