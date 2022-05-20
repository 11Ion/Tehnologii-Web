<?php

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$donation_sum = $_POST['donation_sum'];

include('validation-functions.php');

if($fname_error == NULL && $sname_error == NULL && $email_error == NULL && $phone_error == NULL
 && $address_error == NULL && $donation_sum_error == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
     $result = "Error";
     echo json_encode($result);
}

?>