<?php
  include("lib/session.php");
  include("lib/mini_conection.php");
  include("management_header.php");
  spl_autoload_register(function($class){
      include("class/".$class.".php");
    });
  $check=new CheckTable();
  $rows=$check->check_data("tbl_provost");
  if($rows<1){
    ?>
      <a href="add_provost.php" class="btn btn-success mt-3">Add Provost</a>
    <?php
  }else{
    $query="select * from tbl_provost";
    $result=mysqli_query($connect,$query);
    $data=mysqli_fetch_assoc($result);
        ?>
        <div class="mt-4">
          <div class="row">
            <div class="col-lg-12">
              <center class="mt-4"><h2><span class="mb-5" style="border:10px solid black; padding:5px; color:#F59B29;">Provost</span></h2><center>
              <center><img width="20%" style="border-radius:100%;" class="mt-5"  src="<?php echo $data['pic'];?>" alt=""></center>
              <div class="text-center">
                <h2 class="text-dark"><span><?php echo $data['name'];?></span></h2>
                <h3><?php echo $data['position']; ?></h3>
                <p><?php echo $data['description']; ?></p>
                <p><?php echo $data['phn_num']; ?></p>
              </div>
              <a class="btn btn-primary" href="edit_provost.php?id=<?php echo $data['id'];?>">Edit</a><a class="btn btn-primary ml-3" onclick='return confirm("Are you sure")' href="delete_provost.php?id=<?php echo $data['id'];?>">Delete</a>
            </div>
          </div>

        </div>
        <?php

    }



 ?>

<?php include("footer.php"); ?>
