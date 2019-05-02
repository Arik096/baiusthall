<?php
require_once('config.php');
spl_autoload_register(function($class){
    include($class.".php");
  });
  $con=new DB();
  $con->connection();

  class PostNotice{
    private $table_name="notice_board";
    public function post_notice($title,$author,$description){
      $sql="INSERT INTO $this->table_name (title,author,description) VALUES (:title,:author,:description)";
      $stmt=DB::prepare($sql);
      $stmt->bindParam(":title",$title,PDO::PARAM_STR) ;
      $stmt->bindParam(":author", $author,PDO::PARAM_STR) ;
      $stmt->bindParam(":description", $description,PDO::PARAM_STR) ;
      return $stmt->execute();
    }
    public function update_notice($title,$author,$description,$id){
      $sql="UPDATE $this->table_name SET title=:title,author=:author,description=:description WHERE id=:id ";
      $stmt=DB::prepare($sql);
      $stmt->bindParam(":title",$title,PDO::PARAM_STR) ;
      $stmt->bindParam(":author", $author,PDO::PARAM_STR) ;
      $stmt->bindParam(":description", $description,PDO::PARAM_STR) ;
      $stmt->bindParam(":id", $id,PDO::PARAM_INT) ;
      return $stmt->execute();
    }

    public function delete_notice($id){
      $sql="DELETE FROM $this->table_name WHERE id=:id ";
      $stmt=DB::prepare($sql);
      $stmt->bindParam(":id", $id,PDO::PARAM_INT) ;
      return $stmt->execute();
    }


  }


?>
