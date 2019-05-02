<?php
require_once('config.php');
spl_autoload_register(function($class){
    include($class.".php");
  });
  $con=new DB();
  $con->connection();

  class CheckTable{
    private $tbl;
    public function check_data($table_name){
      $this->tbl=$table_name;
      $sql="select * from $this->tbl";
      $stmt=DB::prepare($sql);
      $stmt->execute();
      $count=$stmt->rowCount();
      return $count;
    }
  }

?>
