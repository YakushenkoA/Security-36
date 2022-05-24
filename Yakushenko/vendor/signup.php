<?php
session_start();
 require_once 'connect.php';

 $full_name= $_POST['full_name'];
 $email= $_POST['email'];

 mysqli_query($connect,"INSERT INTO `contact` (`id`, `full_name`, `email`) VALUES (NULL, '', ' $email')");
 header('Location:../index.php');

  ?>
