<?php
  include("lib/mini_conection.php");
  if(isset($_REQUEST['btn_apply'])){
    if(!preg_match('/^[0-9]*$/', $_REQUEST['std_id'])){
      header("location: student_apply.com?msg=Invalid Student Id");
    }
    if(!preg_match('/^[0-9]*$/', $_REQUEST['std_phone'])){
      header("location: student_apply.com?msg=Invalid Phone Number");
    }
    if (!filter_var($_REQUEST['std_email'], FILTER_VALIDATE_EMAIL)) {
      header("location: student_apply.php?msg=Invalid email format");
    }
    if(!preg_match('/^[0-9]*$/', $_REQUEST['contact_no'])){
      header("location: student_apply.com?msg=Invalid Phone Number");
    }
    if(!preg_match('/^[0-9]*$/', $_REQUEST['guardian_phone'])){
      header("location: student_apply.com?msg=Invalid Phone Number");
    }
    $image_file = $_FILES["picture"]["name"];
    $type  = $_FILES["picture"]["type"]; //file name "txt_file"
    $size  = $_FILES["picture"]["size"];
    $temp  = $_FILES["picture"]["tmp_name"];
    $file_basename=  substr($image_file,0,  strripos($image_file, '.'));//rename file
    $file_ext=  substr($image_file,  strripos($image_file, '.'));
    $f1=$_REQUEST['std_id'].$file_ext;
    $target_file=$f1;
    if($type=="image/jpg" || $type=='image/jpeg'){
     if(!file_exists($target_file)){
      if($size < 5000000) //check file size 5MB
      {
       move_uploaded_file($_FILES['picture']['tmp_name'], 'application_picture/'.$f1); //move upload file temperory directory to your upload folder
       $a=$_REQUEST['std_name'];
       $b=$_REQUEST['std_id'];
       $c=$_REQUEST['std_session'];
       $d=$_REQUEST['std_dept'];
       $e=$_REQUEST['std_level'];
       $f=$_REQUEST['std_term'];
       $g=$_REQUEST['std_gender'];
       $h=$_REQUEST['std_phone'];
       $i=$_REQUEST['std_email'];
       $j=$_REQUEST['std_religion'];
       $k=$_REQUEST['std_nationality'];
       $l=$_REQUEST['std_dob'];
       $m=$_REQUEST['pa_division'];
       $n=$_REQUEST['pa_district'];
       $o=$_REQUEST['pa_district'];
       $p=$_REQUEST['pa_po'];
       $q=$_REQUEST['pa_village'];
       $r=$_REQUEST['ca_division'];
       $s=$_REQUEST['ca_district'];
       $t=$_REQUEST['ca_upazilla'];
       $u=$_REQUEST['ca_po'];
       $v=$_REQUEST['ca_village'];
       $w=$_REQUEST['father_name'];
       $x=$_REQUEST['mother_name'];
       $y=$_REQUEST['contact_no'];
       $z=$_REQUEST['guardian_name'];
       $a1=$_REQUEST['relation'];
       $a2=$_REQUEST['guardian_phone'];
       $b1=$target_file;

       $sql_one="INSERT INTO tbl_new_std_info(std_name,std_id,std_session,std_dept,std_level,std_term,std_gender,std_phone,std_email,std_religion,std_nationality,std_dob) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
       $sql_two="INSERT INTO tbl_new_std_pa(std_id,pa_division,pa_district,pa_upazilla,pa_po,pa_village) VALUES('$b','$m','$n','$o','$p','$q')";
       $sql_three="INSERT INTO tbl_new_std_ca(std_id,ca_division,ca_district,ca_upazilla,ca_po,ca_village) VALUES('$b','$r','$s','$t','$u','$v')";
       $sql_four="INSERT INTO tbl_new_std_guardian_info(std_id,father_name,mother_name,contact_no,guardian_name,relation,guardian_phone,picture) VALUES('$b','$w','$x','$y','$z','$a1','$a2','$b1')";
       $query_one=mysqli_query($connect,$sql_one);
       $query_two=mysqli_query($connect,$sql_two);
       $query_three=mysqli_query($connect,$sql_three);
       $query_four=mysqli_query($connect,$sql_four);
       if($query_one && $query_two && $query_three && $query_four){
        header("location:student_apply.php?msg=Application Submited ....You will be notified soon.Keep your eyes on NOTICE BOARD...!");
       }
       else{
        die(mysqli_error($connect));
       }
      }
      else
      {
       header("location: student_apply.php?msg=Your File To large Please Upload 5MB Size"); //error message file size not large than 5MB
      }
     }
     else
     {
      header("location: student_apply.php?msg=File Already Exists...Check Upload Folder"); //error message file not exists your upload folder path
     }
    }
    else
    {
     header("location:student_apply.php?msg=Upload JPG , JPEG  File Formate.....CHECK FILE EXTENSION"); //error message file extension
    }
  }
 ?>
