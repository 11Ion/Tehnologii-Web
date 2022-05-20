<?php

$success = "Success!";
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

include('validation-functions.php');
include('register.php');
?>