<?php include("management_header.php"); ?>
<?php
  include("lib/session.php");
  include("lib/mini_conection.php");
  ?>
    <a href="add_assistant_provost.php" class="btn btn-success mt-3">Add Assistant Provost</a>
  <?php
    $query="select * from tbl_assistant_provost";
    $result=mysqli_query($connect,$query);
    ?>
      <center class="mt-4"><h2><span class="mb-5" style="border:10px solid black; padding:5px; color:#F59B29;">Assistant Provost</span></h2><center>
        <div class="container mt-4">
          <table class="table table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Possition</th>
                <th scope="col">Description</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <?php
            while($data=mysqli_fetch_assoc($result)) {

              ?>
              <tbody>
                <tr>
                  <td><?php echo $data['name']; ?></td>
                  <td><?php echo $data['position']; ?></td>
                  <td><?php echo $data['description']; ?></td>
                  <td><?php echo $data['phn_num']; ?></td>
                  <td><?php echo $data['pic']; ?></td>
                  <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                </tr>
              </tbody>
              <?php
            }
         ?>

          </table>
        </div>

<?php include("footer.php"); ?>
