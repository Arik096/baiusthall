<?php
require_once "lib/pdo_connection.php";
if(isset($_REQUEST['post_btn']))
{
 try
 {

  $name = $_REQUEST['name'];
  $position = $_REQUEST['position'];
  $desc = $_REQUEST['description'];
  $phn_num = $_REQUEST['phone_number'];

  $image_file = $_FILES["file"]["name"];
  $type  = $_FILES["file"]["type"]; //file name "txt_file"
  $size  = $_FILES["file"]["size"];
  $temp  = $_FILES["file"]["tmp_name"];

  $path="management_picture/".$image_file; //set upload folder path

  $directory="management_picture/"; //set upload folder path for update time previous file remove and new file upload for next use

  if(empty($name)){
   $errorMsg="Please Enter Name";
  }
  else if(empty($position)){
   $errorMsg="Please Enter Position";
  }
  else if(empty($desc)){
   $errorMsg="Please Enter Description";
  }
  else if(empty($phn_num)){
   $errorMsg="Please Enter Phone Number";
  }

  if($image_file)
  {
   if($type=="image/jpg" || $type=='image/jpeg') //check file extension
   {
    if(!file_exists($path)) //check file not exist in your upload folder path
    {
     if($size < 5000000) //check file size 5MB
     {
      unlink($directory.$data['pic']); //unlink function remove previous file
      move_uploaded_file($temp, "management_picture/" .$image_file); //move upload file temperory directory to your upload folder
     }
     else
     {
      $errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
     }
    }
    else
    {
     $errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
    }
   }
   else
   {
    $errorMsg="Upload JPG, JPEG File Formate.....CHECK FILE EXTENSION"; //error message file extension
   }
  }
  else
  {
   $image_file=$data['pic']; //if you not select new image than previous image sam it is it.
  }

  if(!isset($errorMsg))
  {
   $update_stmt=$db->prepare('UPDATE tbl_provost SET name=:name,position=:position,description=:description,phn_num=:phn_num,pic=:pic WHERE id=:id'); //sql update query
   $update_stmt->bindParam(':name',$name);
   $update_stmt->bindParam(':position',$position);
   $update_stmt->bindParam(':description',$desc);
   $update_stmt->bindParam(':phn_num',$phn_num);
   $update_stmt->bindParam(':pic',$image_file); //bind all parameter
   $update_stmt->bindParam(':id',$id);

   if($update_stmt->execute())
   {

    header("location: provost.php");
   }
  }
 }
 catch(PDOException $e)
 {
  echo $e->getMessage();
 }

}
?>
