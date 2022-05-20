<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

include "validation-functions.php";

if($name_error == NULL && $email_error == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}
?>
