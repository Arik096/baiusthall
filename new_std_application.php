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
    <div class="card mt-4 mb-3 container">
      <div class="card-body">
          <form class="mt-1 mb-1 w-10" action="" method="post">
            <input type="text" name="allot" required placeholder="Enter ID">
            <select id="hall"   name="hall_select" class="mt-1"  required>
             <option value="" selected>Choose Hall</option>
             <option value="1">Male Hall</option>
             <option value="2">Female Hall</option>
             <option value="17">17c Female Hall</option>
           </select>
            <input type="text" name="allot" required placeholder="Enter Floor/Building">
            <input id="flat" type="text" name="allot" required placeholder="Enter Flat">
            <script type="text/javascript">
                $(document).ready(function(){
                  $('#hall').change(function() {
                        if( $(this).val() == 17) {
                            $('#flat').prop( "disabled", true);
                        } else {
                            $('#flat').prop( "disabled", false);
                        }
                  });
                });
            </script>
            <input type="text" name="allot" required placeholder="Enter Room">
            <input type="text" name="allot" required placeholder="Enter Bed">
            <input type="submit" onclick='return confirm("Are you sure")' value="AlLot" class="btn btn-primary mt-2">
            </form>

      </div>
    </div>
      <div class="w-80">
        <div class="row">
          <div class="col-lg-8">
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
                      <td><a class="btn btn-primary" href="view_applicant_full_info.php?id=<?php echo $data['std_id'];?>">View Full Info</a><br><a class="btn btn-primary mt-2" href="view_applicant_full_info.php?id=<?php echo $data['std_id'];?>">Cancel Applicant</a></td>
                    </tr>
                  </tbody>
                  <?php
                }
             ?>

              </table>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Available Room's</h5>
                <select id="available_room"   name="hall_select_show" class="mt-1"  required>
                 <option value="" selected>Choose Hall</option>
                 <option value="1">Male Hall</option>
                 <option value="2">Female Hall</option>
                 <option value="17">17c Female Hall</option>
               </select>
               <div class="show_availavle_room">
                <form class="" action="index.html" method="post">
                  <a href="#"></a>
                  <a href="#"></a>
              <button type="button" name="button"></button>></a>
                </form>
               </div>

              </div>

            </div>
          </div>
        </div>
      </div>

<?php include("footer.php"); ?>
