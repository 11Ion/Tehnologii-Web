<?php

$success = "Success!";
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$donation_sum = $_POST['donation_sum'];

include('validation-functions.php');
include('donate.php');
?>