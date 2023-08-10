<?php

  include "database.php";
  $name = 'kru';
  $query1 = "SELECT * FROM `creators` WHERE `username` = '$name' ";
    $result = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result);
    $check = password_verify('123', $row['password']);
    if($check == false){
        echo "Okay";
    }
    else{
        echo "Got";
    }
  
  $error = "false";
  $msg = "false";
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query1 = "SELECT * FROM `creators` WHERE `username` = '$name' ";
    $result = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result);
    $check = password_verify($password, $row['password']);
    if($check == true){
        header("Location: /forums/index.php?loggedin=true&username='$name' ");
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $name;
    }
    else{
        $error = "Wrong Username or Password";
        header("Location: /forums/index.php?loggedinsuccess=false&error=$name");
    }
  }
?>