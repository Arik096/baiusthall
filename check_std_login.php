<?php
require_once('class/DB.php');
  spl_autoload_register(function($class){
      include("class/".$class.".php");
    });
    $con=new DB();
    $con->connection();
    $login_std=new LoginStudent();
    if($_SERVER['REQUEST_METHOD']=="POST"){
      session_start();
      $user_name=$_POST['u_name'];
      $password=$_POST['pass'];
      if($user_name=="" || $password==""){
        echo "<span>Field must not not be empty</span>";
      }
      else{
        $check_result=$login_std->check_std_userName_pass($user_name,$password);
        if($check_result){
          echo "match";
          $_SESSION['user_session'] = $user_name;
        }
        else {
          echo "not match";
        }
    }
  }

 ?>
