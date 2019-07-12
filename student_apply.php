<?php include("main_header.php"); ?>
<?php include("lib/mini_conection.php"); ?>
<!--collapse-->
<center class="mt-4"><h2><span class="mb-5" style="border:10px solid black; padding:5px; color:#F59B29;">Apply For Seat</span></h2></center>
  <hr class="bg-success mt-5">
<div class="container mt-4" style="width:80%;border:1px solid black;">
    <?php
      if(isset($_REQUEST['msg'])){
        ?>
            <div class="container bg-success"><span><?php echo $_REQUEST['msg']; ?></span></div>
        <?php

      }
     ?>
  <form action="student_apply_core.php" method="post" enctype="multipart/form-data">
    <div class="mb-2">
      <span><b>1.Personal Info:</b></span>
    </div>
    <div class="form-group">
      <label>Student Name<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="std_name" required  placeholder="Enter Student Name">
    </div>
    <div class="form-group">
      <label>Student ID<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="std_id" required placeholder="Enter Student ID">
    </div>
    <div class="form-group">
      <label>Session<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="std_session" required placeholder="Enter Session">
    </div>
    <div class="form-group">
      <label>Department<sup><span style="color:red;">*</span></sup></label>
      <select name="std_dept" required>
         <option value="" selected>Choose Department</option>
         <option value="CSE">CSE</option>
         <option value="EEE">EEE</option>
         <option value="CE">CE</option>
         <option value="DBA">DBA</option>
         <option value="English">English</option>
         <option value="LLB">LLB</option>
       </select>
    </div>
    <div class="form-group">
      <label>Level<sup><span style="color:red;">*</span></sup></label>
      <select name="std_level" required>
         <option selected>Choose Level</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
       </select>
    </div>
    <div class="form-group">
      <label>Term<sup><span style="color:red;">*</span></sup></label>
      <select name="std_term" required>
         <option selected>Choose Term</option>
         <option value="1">1</option>
         <option value="2">2</option>
       </select>
    </div>
    <div class="form-group">
      <label>Gender<sup><span style="color:red;">*</span></sup></label>
      <select name="std_gender" required>
         <option selected>Choose Gender</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
    </div>
    <div class="form-group">
      <label>Phone Number<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="std_phone" placeholder="Enter Phone Number">
    </div>
    <div class="form-group">
      <label>Email<sup><span style="color:red;">*</span></sup></label>
      <input type="email" class="form-control" name="std_email" required placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label>Religion<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="std_religion" required placeholder="Enter Religion">
    </div>
    <div class="form-group">
      <label>Nationality<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="std_nationality" required placeholder="Enter Nationality">
    </div>
    <div class="form-group">
      <label>Date Of Birth<sup><span style="color:red;">*</span></sup></label>
      <br>
      <span>Day</span>-<span>Month</span>-<span>Year</span>
      <br>
      <input type="date" name="std_dob" required name="bday">
    </div>
    <div class="mb-2">
      <span><b>2.Permanent Address:</b></span>
    </div>
    <div class="form-group">
      <label>Division<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="pa_division" required placeholder="Enter Division">
    </div>
    <div class="form-group">
      <label>District<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="pa_district" required placeholder="Enter District">
    </div>
    <div class="form-group">
      <label>P.S/Upazilla<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="pa_upazilla" required placeholder="Enter P.S/Upazilla">
    </div>
    <div class="form-group">
      <label>Post Office/Code<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="pa_po" required placeholder="Enter Post Office/Code">
    </div>
    <div class="form-group">
      <label>Village/House & Road<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="pa_village" required placeholder="Enter Village/House & Road">
    </div>
    <div class="mb-2">
      <span><b>3.Present Address:</b></span>
    </div>
    <div class="form-group">
      <label>Division<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="ca_division" required placeholder="Enter Division">
    </div>
    <div class="form-group">
      <label>District<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="ca_district" required placeholder="Enter District">
    </div>
    <div class="form-group">
      <label>P.S/Upazilla<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="ca_upazilla" required placeholder="Enter P.S/Upazilla">
    </div>
    <div class="form-group">
      <label>Post Office/Code<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="ca_po" required placeholder="Enter Post Office/Code">
    </div>
    <div class="form-group">
      <label>Village/House & Road<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="ca_village" required placeholder="Enter Village/House & Road">
    </div>
    <div class="mb-2">
      <span><b>4.Guardian Info:</b></span>
    </div>
    <div class="form-group">
      <label>Father's Name<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="father_name" required placeholder="Enter Father's Name">
    </div>
    <div class="form-group">
      <label>Mother's Name<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="mother_name" required placeholder="Enter Mother's Name">
    </div>
    <div class="form-group">
      <label>Contact Number<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="contact_no" required placeholder="Enter Contact Number">
    </div>
    <div class="form-group">
      <label>Guardian Name<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="guardian_name" required placeholder="Enter Guardian Name">
    </div>
    <div class="form-group">
      <label>Relation<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="relation" required placeholder="Enter Relation">
    </div>
    <div class="form-group">
      <label>Contact Number<sup><span style="color:red;">*</span></sup></label>
      <input type="text" class="form-control" name="guardian_phone" required placeholder="Enter Contact Number">
    </div>
    <div class="form-group">
      <label>Upload Picture<sup><span style="color:red;">*</span></sup></label>
      <input type="file" name="picture" required>
    </div>
    <button type="submit" class="btn btn-primary mb-3" name="btn_apply">Submit Application</button>
    <div class="">
      <sup><span style="color:red;">*</span></sup> Required
    </div>
  </form>

</div>
<?php include("footer.php"); ?>
