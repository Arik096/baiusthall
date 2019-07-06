<?php include("lib/session.php"); ?>
<?php include("management_header.php"); ?>
<?php include("lib/mini_conection.php"); ?>

<?php
  if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $query="SELECT * FROM tbl_std_info NATURAL JOIN tbl_std_pa NATURAL JOIN tbl_std_ca NATURAL JOIN tbl_std_guardian_info WHERE std_id='$id'";
    if($result=mysqli_query($connect,$query)){
      $data=mysqli_fetch_assoc($result);
    }
    $query1="SELECT * FROM tbl_male_hall_1 WHERE std_id='$id'";
    $query2="SELECT * FROM tbl_17_c WHERE std_id='$id'";
    //$query3="SELECT * FROM tbl_female_hall WHERE std_id='$id'";

    $result1=mysqli_query($connect,$query1);
    $result2=mysqli_query($connect,$query2);

  }

?>
<div class="container mt-2">
  <center><div class="mb-4">
    <img src="<?php echo 'student_picture/'.$data['picture'];?>" height="200" width="200">
  </div></center>
  <?php
  if(mysqli_num_rows($result1)>0){
    $data1=mysqli_fetch_assoc($result1);
    include('male_hall_1_single_std_info.php');
  }
  else if(mysqli_num_rows($result2)){
    $data2=mysqli_fetch_assoc($result2);
    include('17_c_hall_single_std_info.php');
  }
   ?>

  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="mb-2">
        <span><b>1.Personal Info:</b></span>
      </div>
      <div class="">
        <label>Student Name: <?php echo " ".$data['std_name'];?></label>
      </div>
      <div class="">
        <label>Student ID: <?php echo " ".$data['std_id'];?></label>
      </div>
      <div class="">
        <label>Session: <?php echo " ".$data['std_session'];?></label>
      </div>
      <div class="">
        <label>Department: <?php echo " ".$data['std_dept'];?></label>
      </div>
      <div class="">
        <label>Level: <?php echo " ".$data['std_level'];?></label>
      </div>
      <div class="">
        <label>Term: <?php echo " ".$data['std_term'];?></label>
      </div>
      <div class="">
        <label>Gender: <?php echo " ".$data['std_gender'];?></label>
      </div>
      <div class="">
        <label>Phone Number: <?php echo " ".$data['std_phone'];?></label>
      </div>
      <div class="">
        <label>Email: <?php echo " ".$data['std_email'];?></label>
      </div>
      <div class="">
        <label>Religion: <?php echo " ".$data['std_religion'];?></label>
      </div>
      <div class="">
        <label>Nationality: <?php echo " ".$data['std_nationality'];?></label>
      </div>
      <div class="">
        <label>Date of Birth: <?php echo " ".$data['std_dob'];?></label>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="mb-2">
        <span><b>2.Parmanent Address:</b></span>
      </div>
      <div class="">
        <label>Division: <?php echo " ".$data['pa_division'];?></label>
      </div>
      <div class="">
        <label>District: <?php echo " ".$data['pa_district'];?></label>
      </div>
      <div class="">
        <label>P.S/Upazilla: <?php echo " ".$data['pa_upazilla'];?></label>
      </div>
      <div class="">
        <label>Post Office/Code: <?php echo " ".$data['pa_po'];?></label>
      </div>
      <div class="">
        <label>Village/House & Road: <?php echo " ".$data['pa_village'];?></label>
      </div>

      <div class="mt-3 mb-2">
        <span><b>3.Present Address:</b></span>
      </div>
      <div class="">
        <label>Division: <?php echo " ".$data['ca_division'];?></label>
      </div>
      <div class="">
        <label>District: <?php echo " ".$data['ca_district'];?></label>
      </div>
      <div class="">
        <label>P.S/Upazilla: <?php echo " ".$data['ca_upazilla'];?></label>
      </div>
      <div class="">
        <label>Post Office/Code: <?php echo " ".$data['ca_po'];?></label>
      </div>
      <div class="">
        <label>Village/House & Road: <?php echo " ".$data['ca_village'];?></label>
      </div>

    </div>



    <div class="col-lg-4">
      <div class="mb-2">
        <span><b>4.Guardian Info:</b></span>
      </div>
      <div class="">
        <label>Father's Name: <?php echo " ".$data['father_name'];?></label>
      </div>
      <div class="">
        <label>Mother's Name: <?php echo " ".$data['mother_name'];?></label>
      </div>
      <div class="">
        <label>Contact Number: <?php echo " ".$data['contact_no'];?></label>
      </div>
      <div class="">
        <label>Guardian Name: <?php echo " ".$data['guardian_name'];?></label>
      </div>
      <div class="">
        <label>Relation: <?php echo " ".$data['relation'];?></label>
      </div>
      <div class="">
        <label>Contact Number: <?php echo " ".$data['guardian_phone'];?></label>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
