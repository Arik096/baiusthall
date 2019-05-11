<?php include("management_header.php"); ?>
<?php
  include("lib/session.php");
  include("lib/mini_conection.php");
  ?>
  <?php
    $query="select * from tbl_new_std_info order by id";
    $result=mysqli_query($connect,$query);
    ?>
      <center class="mt-4"><h2><span class="mb-5" style="border:10px solid black; padding:5px; color:#F59B29;">New Applicant</span></h2><center>
      <div class="w-80">
        <div class="row">
          <div class="col-lg-10">
            <div class="container mt-4">
              <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">ID</th>
                    <th scope="col">Department</th>
                    <th scope="col">Level</th>
                    <th scope="col">Term</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <?php
                while($data=mysqli_fetch_assoc($result)) {

                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['std_name']; ?></td>
                      <td><?php echo $data['std_id']; ?></td>
                      <td><?php echo $data['std_dept']; ?></td>
                      <td><?php echo $data['std_level']; ?></td>
                      <td><?php echo $data['std_term']; ?></td>
                      <td><?php echo $data['std_gender']; ?></td>
                      <td><?php echo $data['std_phone']; ?></td>
                      <td><a class="btn btn-primary" href="view_applicant_full_info.php?id=<?php echo $data['std_id'];?>">View Full Info</a><form class="mt-1 mb-1 form-group" action="" method="post"><input type="text" class="form-control" name="allot" required placeholder="Enter Room">
                      <select class="mt-1"  required>
                         <option value="" selected>Choose Hall</option>
                         <option value="">Male Hall</option>
                         <option value="">Female Hall</option>
                         <option value="">17c Female Hall</option>
                       </select></form><a onclick='return confirm("Are you sure")' class="btn btn-primary ml-2" href="#">Allot</a></td>
                    </tr>
                  </tbody>
                  <?php
                }
             ?>

              </table>

            </div>
          </div>
          <div class="col-lg-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Available Room's</h5>
              </div>

            </div>
          </div>
        </div>
      </div>

<?php include("footer.php"); ?>
