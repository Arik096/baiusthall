<?php
require_once "lib/pdo_connection.php";

if(isset($_REQUEST['id']))
{
 // select image from db to delete
 $id=$_REQUEST['id']; //get delete_id and store in $id variable

 $select_stmt= $db->prepare('SELECT * FROM tbl_staff WHERE id =:id'); //sql select query
 $select_stmt->bindParam(':id',$id);
 $select_stmt->execute();
 $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
 unlink($row['pic']); //unlink function permanently remove your file

 //delete an orignal record from db
 $delete_stmt = $db->prepare('DELETE FROM tbl_staff WHERE id =:id');
 $delete_stmt->bindParam(':id',$id);
 $delete_stmt->execute();

 header("Location:staff.php");
}

?>
