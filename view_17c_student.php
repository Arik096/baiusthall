
<?php
  $query="SELECT * FROM tbl_std_info NATURAL JOIN tbl_17_c";
  $result=mysqli_query($connect,$query);
 ?>
<div class="col-lg-12">
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
          <th scope="col">Floor NO</th>
          <th scope="col">Room No</th>
          <th scope="col">Bed</th>
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
            <td><?php echo $data['building_no']; ?></td>
            <td><?php echo $data['room_no']; ?></td>
            <td><?php echo $data['bed_no']; ?></td>

            <td><a class="btn btn-primary" href="#">View Full Info</a><br><a class="btn btn-primary mt-2" href="#">De Allot</a></td>
          </tr>
        </tbody>
        <?php
      }
   ?>

    </table>

  </div>
</div>
