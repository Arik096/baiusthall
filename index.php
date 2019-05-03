<?php
  spl_autoload_register(function($class){
      include("class/".$class.".php");
    });
    $obj=new DB();
    $obj->connection();

 ?>


<?php include("main_header.php"); ?>
      <!--login section-->
      <div id="accordion">
        <div class="row mt-5" style="margin-left:5%;">
          <div class="col-lg-3 col-md-3 mb-3">

              <div id="headingOne">
                <img style="width:175px;" src="img/management_logo.png" alt="">
                <button class="mx-3 btn btn-outline-info mt-2 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Management Login</button>
              </div>
              <!--collapse-->
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <form action="" method="post" onsubmit="return false;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary" id="mng_btn">Login</button>
                  <span id="spinner_one"></span>
                  <div id="msg" style="color:red">

                  </div>
                </form>

              </div>

              <!--end collapse-->

          </div>
          <div class="col-lg-3 col-md-3 mb-3">
            <div id="headingTwo">
              <img style="width:180px" src="img/student_logo.png" alt="">
                <button class="mx-3 btn btn-outline-info mt-2 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Student Login</button>
            </div>

                  <!--collapse-->
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student ID</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student ID">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                  </div>

                  <!--end collapse-->

          </div>
          <div class="col-lg-3 col-md-3 mb-3">

                <img style="width:180px" src="img/notice_board_logo.png" alt="">
                 <a href="view_notice.php" class="mx-4 btn btn-outline-info mt-2 ">Notice Board</a>

          </div>
          <div class="col-lg-3 col-md-3 mb-3">

            <div id="headingThree">
              <img style="width:160px;" src="img/new_logo.png" alt="">
               <button class="mx-3 btn btn-outline-info mt-2 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">New Applicant</button>
            </div>
                 <!--collapse-->
                 <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                   <form>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Student Name</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student Name">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Student ID</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student ID">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Department</label>
                       <select>
                          <option value="" selected>Choose Department</option>
                          <option value="">CSE</option>
                          <option value="">EEE</option>
                          <option value="">CE</option>
                          <option value="">DBA</option>
                          <option value="">English</option>
                          <option value="">LLB</option>
                        </select>
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Level</label>
                       <select>
                          <option value="" selected>Choose Level</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                        </select>
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Term</label>
                       <select>
                          <option value="" selected>Choose Term</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                        </select>
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Gender</label>
                       <select>
                          <option value="" selected>Choose Gender</option>
                          <option value="">Male</option>
                          <option value="">Female</option>
                        </select>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit Application</button>
                   </form>
                 </div>
                 <!--end collaps-->

          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Life At BAIUST Hall</h3>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem5
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
          <!--Slider section-->
            <?php include("slider.php"); ?>
        </div>
      </div>
      <!--footer-->
      <?php
        include("footer.php");
      ?>
    <!--<script type="text/javascript" src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>
