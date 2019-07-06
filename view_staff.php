<?php include("main_header.php"); ?>
<?php
  include("lib/mini_conection.php");
    $query="select * from tbl_staff";
    $result=mysqli_query($connect,$query);
      ?>
        <center class="mt-4"><h2><span class="mb-5" style="border:10px solid black; padding:5px; color:#F59B29;">Staffs</span></h2><center>
        <div class="mt-4">
          <div class="row">
                <?php
                while($data=mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-lg-3">
                      <div class="text-center">
                        <center><img width="20%" style="border-radius:100%;" class="mt-5"  src="<?php echo $data['pic'];?>" alt=""></center>
                        <h2 class="text-dark"><span><?php echo $data['name'];?></span></h2>
                        <h3><?php echo $data['position']; ?></h3>
                        <p><?php echo $data['description']; ?></p>
                        <p><?php echo $data['phn_num']; ?></p>
                      </div>
                  </div>
                    <?php

                }
                ?>
          </div>
        </div>
      <?php
 ?>

<?php include("footer.php"); ?>
