<?php
    include("lib/mini_conection.php");
    if(isset($_REQUEST['btn_allot'])){
      $id=$_REQUEST['std_id'];
      $query="SELECT * FROM tbl_new_std_info NATURAL JOIN tbl_new_std_pa NATURAL JOIN tbl_new_std_ca NATURAL JOIN tbl_new_std_guardian_info WHERE std_id='$id'";
      $result=mysqli_query($connect,$query);
      $data=mysqli_fetch_assoc($result);

      $a=$data['std_name'];
      $b=$data['std_id'];
      $c=$data['std_session'];
      $d=$data['std_dept'];
      $e=$data['std_level'];
      $f=$data['std_term'];
      $g=$data['std_gender'];
      $h=$data['std_phone'];
      $i=$data['std_email'];
      $j=$data['std_religion'];
      $k=$data['std_nationality'];
      $l=$data['std_dob'];
      $m=$data['pa_division'];
      $n=$data['pa_district'];
      $o=$data['pa_district'];
      $p=$data['pa_po'];
      $q=$data['pa_village'];
      $r=$data['ca_division'];
      $s=$data['ca_district'];
      $t=$data['ca_upazilla'];
      $u=$data['ca_po'];
      $v=$data['ca_village'];
      $w=$data['father_name'];
      $x=$data['mother_name'];
      $y=$data['contact_no'];
      $z=$data['guardian_name'];
      $a1=$data['relation'];
      $a2=$data['guardian_phone'];
      $b1=$data['picture'];



      $sql_one="INSERT INTO tbl_std_info(std_name,std_id,std_session,std_dept,std_level,std_term,std_gender,std_phone,std_email,std_religion,std_nationality,std_dob) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
      $sql_two="INSERT INTO tbl_std_pa(std_id,pa_division,pa_district,pa_upazilla,pa_po,pa_village) VALUES('$b','$m','$n','$o','$p','$q')";
      $sql_three="INSERT INTO tbl_std_ca(std_id,ca_division,ca_district,ca_upazilla,ca_po,ca_village) VALUES('$b','$r','$s','$t','$u','$v')";
      $sql_four="INSERT INTO tbl_std_guardian_info(std_id,father_name,mother_name,contact_no,guardian_name,relation,guardian_phone,picture) VALUES('$b','$w','$x','$y','$z','$a1','$a2','$b1')";
      $query_one=mysqli_query($connect,$sql_one);
      $query_two=mysqli_query($connect,$sql_two);
      $query_three=mysqli_query($connect,$sql_three);
      $query_four=mysqli_query($connect,$sql_four);
      if($query_one && $query_two && $query_three && $query_four){
            $table = $_REQUEST['hall_select'];
            $std_id=$_REQUEST['std_id'];
            $floor=$_REQUEST['floor_no'];
            $flat=$_REQUEST['flat_no'];
            $room=$_REQUEST['room_no'];
            $bed=$_REQUEST['bed_no'];

            if($table=='1'){

              $sql="UPDATE tbl_male_hall_1 SET std_id='$std_id' WHERE floor_no='$floor' AND  flat_no='$flat' AND room_no='$room' AND bed_no='$bed'";
              $result=mysqli_query($connect,$sql);
            }
            elseif ($table=='2') {
              $sql="UPDATE tbl_male_hall_1 SET std_id='$std_id'";
              $result=mysqli_query($connect,$sql);
            }
            elseif ($table=='17') {
              $sql="UPDATE tbl_17_c SET std_id='$std_id' WHERE building_no='$floor' AND room_no='$room' AND bed_no='$bed'";
              $result=mysqli_query($connect,$sql);
            }
            if($result){
              $create_login="INSERT INTO tbl_std_login(std_id,user_name,password) VALUES('$b','$b','$b')";
              mysqli_query($connect,$create_login);

              $delete_data="DELETE FROM tbl_new_std_info WHERE std_id='$b'";
              mysqli_query($connect,$delete_data);
              rename("application_picture/$b1", "student_picture/$b1");
              unlink("application_picture/$b1");
              header("location: new_std_application.php?msg=Alloted Success");
            }
      }
      else{
        die(mysqli_error($connect));
      }

    }
 ?>
