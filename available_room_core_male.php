<?php
  include("lib/mini_conection.php");
  $sql="SELECT * FROM tbl_male_hall_1 WHERE std_id IS NULL ORDER BY room_no ASC";
  $result=mysqli_query($connect,$sql);

  ?><h4>Male Hall</h4><?php
  ?><table class="table table-hover">
    <thead class="">
      <tr>
        <th scope="col">Floor/Building</th>
        <th scope="col">Flat</th>
        <th scope="col">Room</th>
        <th scope="col">Bed</th>
      </tr>
    </thead><?php
  while($data=mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <tr>
        <td><?php echo $data['floor_no']; ?></td>
        <td><?php echo $data['flat_no']; ?></td>
        <td><?php echo $data['room_no']; ?></td>
        <td><?php echo $data['bed_no']; ?></td>
      </tr>
    </tbody>
    <?php
  }
  ?></table><?php
 ?>
