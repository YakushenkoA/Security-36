<?php
session_start();
 require_once 'connect.php';

 $login= $_POST['login'];
 $password= $_POST['password'];
 $check_user=mysqli_query($connect,"SELECT * FROM `users`WHERE`login`='$login'AND`password`='$password'");
 if(mysqli_num_rows($check_user)>0){
    header('Location:../profile.php');
 }else{
   die('Неверный пароль');
 }
//Этот код отвечает за авторизацию но у меня ее нет
