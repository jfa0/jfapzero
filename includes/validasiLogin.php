<?php

// establishing the MySQLi connection

 session_start();

include('sambung.php');
if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['masukin'])){

$username = mysqli_real_escape_string($con,$_POST['username']);

$password = mysqli_real_escape_string($con,$_POST['password']);

$sel_user = "select * from admin where username='$username' AND password='$password'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['username']=$username;

echo "<script>window.open('../index.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";
header('Location: login.php');

}

}

?>