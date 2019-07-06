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
  $file_basename=  substr($image_file,0,  strripos($image_file, '.'));//rename file
  $file_ext=  substr($image_file,  strripos($image_file, '.'));
  $f1=uniqid().$file_ext;
  $target_file='management_picture/'.$f1;

  $path="management_picture/".$f1; //set upload folder path

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
  else if(empty($target_file)){
   $errorMsg="Please Select Image";
  }
  else if($type=="image/jpg" || $type=='image/jpeg') //check file extension
  {
   if(!file_exists($path)) //check file not exist in your upload folder path
   {
    if($size < 5000000) //check file size 5MB
    {
     move_uploaded_file($temp,$target_file); //move upload file temperory directory to your upload folder
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
   $errorMsg="Upload JPG , JPEG  File Formate.....CHECK FILE EXTENSION"; //error message file extension
  }

  if(!isset($errorMsg))
  {
   $insert_stmt=$db->prepare('INSERT INTO tbl_staff(name,position,description,phn_num,pic) VALUES(:name,:position,:description,:phn_num,:pic)'); //sql insert query
   $insert_stmt->bindParam(':name',$name);
   $insert_stmt->bindParam(':position',$position);
   $insert_stmt->bindParam(':description',$desc);
   $insert_stmt->bindParam(':phn_num',$phn_num);
   $insert_stmt->bindParam(':pic',$target_file);   //bind all parameter

   if($insert_stmt->execute())
   {

    header("location: staff.php"); //refresh 3 second and redirect to index.php page
   }
  }
 }
 catch(PDOException $e)
 {
  echo $e->getMessage();
 }
}

?>
