<?php include("lib/mini_conection.php"); ?>

 <div class="col-lg-6">
   <div>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <?php
               $sql="SELECT * FROM tbl_slide_show";
               $result=mysqli_query($connect,$sql);
               $row=mysqli_num_rows($result);
               $count=0;
               while($count<$row){
                 $actives='';
                 if($count==0){
                   $actives='active';
               }
               ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count; ?>" class="<?php echo $actives; ?>"></li>
               <?php
               $count++;
               }

            ?>

         </ol>
         <div class="carousel-inner">
           <?php
              $i=0;
              while($data=mysqli_fetch_assoc($result)){
                $actives='';
                if($i==0){
                  $actives='active';
                }
                  ?>
                  <div class="carousel-item <?php echo $actives; ?>">
                    <img height="300" class="d-block w-100 custom-slider" id="custom-slider-img" src="<?php echo $data['pic']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo $data['title']; ?></h5>
                    </div>
                  </div>

                  <?php
                  $i++;
              }

            ?>

         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
           <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
           </a>
       </div>
       </div>
       </div>
 </div>
