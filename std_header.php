<?php
  include("lib/session.php");
  include("lib/mini_conection.php");

  $sql="SELECT * FROM tbl_std_login";
  $result=mysqli_query($connect,$sql);
  $data=mysqli_fetch_assoc($result);
  $id=$data['std_id'];

  $query="SELECT * FROM tbl_std_info NATURAL JOIN tbl_std_pa NATURAL JOIN tbl_std_ca NATURAL JOIN tbl_std_guardian_info WHERE std_id='$id'";
  $r=mysqli_query($connect,$query);
  $row=mysqli_fetch_assoc($r);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="img/baiust_logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>BAIUST HALL</title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--Header section-->
<div id="header" class="custom-containers bg-dark sticky-top">
  <nav id="navbar-section" class="navbar navbar-light nav-custom">
      <div class="row">
        <div class="col-lg-1 col-md-12">
          <center><a href="http://www.baiust.edu.bd" target="_blank"><img id="logo_img" class="img_logo" src="img/baiust_logo.png" alt=""></a></center>
        </div>
        <div class="navbar-nav col-lg-11 col-md-12 align-self-center">
            <center><h2 class="">Bangladesh Army International University of Science and Technology </h2></center>
        </div>
      </div>
  </nav>
<!--menu-->
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="std_login.php">Home</a>
          </li>
          <li>
            <a class="nav-link" href="#">Meal Plan</a>
          </li>
          <li>
            <a class="nav-link" href="#">Hall Bill</a>
          </li>
          <li>
            <a class="nav-link" href="#">Complain Box</a>
          </li>
        </ul>
      </div>
      <div class="dropdown dropleft">
          <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
            <?php echo $row['std_name']; ?>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="std_profile.php">Profile</a>
            <a class="dropdown-item" href="#">Change Password</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
    </div>
    </nav>

    </div>
  </div>
