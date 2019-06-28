<?php include("main_header.php"); ?>
<div class="container">
  <center class="mt-4"><h2><span class="mb-4" style="border:10px solid black; padding:5px; color:#F59B29;">Notice Board</span></h2><center>
  <?php
    spl_autoload_register(function($class){
        include("class/".$class.".php");
      });
      include("lib/mini_conection.php");
      global $get_page;
      if(isset($_GET['action'])){
        $get_page=$_GET['action'];
      }
      if($get_page=="" || $get_page=="1"){
         $target_page=0;
      }
      else{
        $target_page=($get_page*2)-2;
      }
      $sql="select * from notice_board order by id desc limit $target_page,2";
      $sql2="select * from notice_board";
      $result=mysqli_query($connect,$sql);
      $result2=mysqli_query($connect,$sql2);
      $count=mysqli_num_rows($result2);
      $i=$count/2;
      $page=floor($i);

      while ($value=mysqli_fetch_assoc($result)) {
          ?>
          <div class=" col-lg-12 mt-5 custom-card">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title"><?php echo $value['title']; ?></h3>
                <small><?php echo $value['author']; ?></small><br>
                <small><?php echo $value['date']; ?></small>
                <p class="card-text">
                  <?php echo $value['description']; ?>
                </p>
                <?php
                  if($value['pic']){
                    ?>
                        <img src="<?php echo $value['pic'] ?>" alt="..." class="img-thumbnail">
                    <?php
                  }
                 ?>
              </div>
            </div>
          </div>
          <?php
      }
      for($target=1;$target<=$page;$target++){
        ?>
          <a href="view_notice.php?action=<?php echo $target;?>"><?php echo $target; ?></a>
        <?php
      }
   ?>

</div>
<?php include("footer.php"); ?>
