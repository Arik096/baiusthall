<?php
  include("lib/mini_conection.php");
  $sql="SELECT * FROM tbl_17_c WHERE std_id IS NULL";
  $result=mysqli_query($connect,$sql);

  ?><h4>17-C</h4><?php
  ?><table class="table table-hover">
    <thead class="">
      <tr>
        <th scope="col">Floor/Building</th>
        <th scope="col">Room</th>
        <th scope="col">Bed</th>
      </tr>
    </thead><?php
  while($data=mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <tr>
        <td><?php echo $data['building_no']; ?></td>
        <td><?php echo $data['room_no']; ?></td>
        <td><?php echo $data['bed_no']; ?></td>
      </tr>
    </tbody>
    <?php
  }
  ?></table><?php
 ?>
