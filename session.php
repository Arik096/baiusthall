<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" type="image/x-icon" href="img/baiust_logo.png">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Document</title>
   <script type="text/javascript" src="js/jquery.js"></script>
   <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
