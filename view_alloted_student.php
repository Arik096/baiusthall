<?php include("lib/session.php"); ?>
<?php include("management_header.php"); ?>
<?php include("lib/mini_conection.php"); ?>

</div>
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
     <div class="">
      <form class="" action="" method="post">
        <button class="btn btn-primary" type="submit" name="btn1">17-C Hall</button>
        <button class="btn btn-primary" type="submit" name="btn2">Female Hall</button>
        <button class="btn btn-primary" type="submit" name="btn3">Male Hall</button>
      </form>
     </div>
     <div class="">
       <?php
          if(isset($_POST['btn1'])){
            include('view_17c_student.php');
          }
          else if(isset($_POST['btn2'])){
            include('available_room_core_female.php');
          }
          else if(isset($_POST['btn3'])){
            include('view_male_1_student.php');
          }
          else{
            include('view_17c_student.php');
          }

        ?>
     </div>

    </div>

  </div>
</div>

<?php include("footer.php"); ?>
