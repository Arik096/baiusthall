<?php include('std_header.php'); ?>

<div class="container">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="student_picture/<?php echo $row['picture']; ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><?php echo $row['std_name']; ?></p>
  </div>
</div>
</div>

<?php include('footer.php') ?>
