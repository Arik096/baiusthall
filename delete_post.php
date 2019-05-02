<?php
include("lib/session.php");

      $id=$_REQUEST['id'];

      spl_autoload_register(function($class){
          include("class/".$class.".php");
        });
        $post=new PostNotice();
        $result=$post->delete_notice($id);
        if($result){
          header("location:view_post_management.php");
        }
 ?>
