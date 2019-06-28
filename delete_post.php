<?php
include("lib/session.php");
include("lib/mini_conection.php");

      $id=$_REQUEST['id'];

      spl_autoload_register(function($class){
          include("class/".$class.".php");
        });
        $sql="SELECT pic FROM notice_board WHERE id=$id";
        $result=mysqli_query($connect,$sql);
        $data=mysqli_fetch_assoc($result);

        $post=new PostNotice();
        $result=$post->delete_notice($id);
        if($result){

          unlink($data['pic']);
          header("location:view_post_management.php");
        }
 ?>
