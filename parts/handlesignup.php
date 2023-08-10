<?php
  include "database.php";
  $error = false;
  $msg = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query1 = "SELECT * FROM `creators` WHERE `username` = '$name' OR `email` = '$email' ";
    $result = mysqli_query($conn, $query1);
    $num = mysqli_num_rows($result);
    if($num == 0){
      $query2 = "INSERT INTO `creators` (`username`, `email`, `password`) VALUES ('$name', '$email', '$hash')";
      $result = mysqli_query($conn, $query2);
      header("Location: /forums/index.php?signupsuccess=true");
    }
    else{
      $error = "Username Or Email already exists";
      header("Location: /forums/index.php?signupsuccess=false&error=$error");
    }
  }
?>