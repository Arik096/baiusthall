<?php
require_once('config.php');
spl_autoload_register(function($class){
    include($class.".php");
  });
  $con=new DB();
  $con->connection();
  class LoginStudent{
    private $tbl="tbl_std_login";
    public function check_std_userName_pass($name,$pass){
      $sql="select * from $this->tbl where user_name=:name and password=:pass";
      $stmt=DB::prepare($sql);
      $stmt->bindParam(":name",$name,PDO::PARAM_STR) ;
      $stmt->bindParam(":pass", $pass,PDO::PARAM_STR) ;
      $stmt->execute();
      $count=$stmt->rowCount();
      $data=$stmt->fetch(PDO::FETCH_OBJ);
      return $count;
    }
  }

?>
