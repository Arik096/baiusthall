<?php
require_once('class/DB.php');
  spl_autoload_register(function($class){
      include("class/".$class.".php");
    });
    $con=new DB();
    $con->connection();
    $login_admin=new LoginAdmin();
    if($_SERVER['REQUEST_METHOD']=="POST"){
      session_start();
      $admin_user_name=$_POST['uname'];
      $admin_password=$_POST['pwd'];
      $admin_password_encr=sha1(md5($admin_password));
      if($admin_user_name=="" || $admin_password==""){
        echo "<span>Field must not not be empty</span>";
      }
      else if(preg_match('/[^a-z0-9_-]+/i',$admin_user_name)){
        echo "<span>userName must contain only alphnumeric,dashes.underscore</span>";
      }
      else{
        $check_result=$login_admin->check_admin_userName_pass($admin_user_name,$admin_password_encr);
        if($check_result){
          echo "match";
          $_SESSION['user_session'] = $admin_user_name;
        }
        else {
          echo "not match";
        }
    }
  }

 ?>
