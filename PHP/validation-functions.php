<?php

if(isset($name)){
if(empty($name)){
    $name_error = 'Numele tau nu este introdus';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $name_error = 'Numele tău ar trebui să conțină doar caractere';
}
}

if(isset($fname)){
if(empty($fname)){
    $fname_error = 'Nu este introdus prenumele dvs';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $fname_error = 'Prenumele tău ar trebui să conțină doar caractere';
}
}

if(isset($sname)){
if(empty($sname)){
    $sname_error = 'Al doilea nume nu este introdus';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
    $sname_error = 'Al doilea nume ar trebui să conțină doar caractere';
}
}

if(isset($email)){
if(empty($email)){
    $email_error = 'E-mailul dvs. nu este introdus';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul dvs. nu este valid';
}
}

if(isset($phone)){
if(empty($phone)){
    $phone_error = 'Telefonul dvs. nu este introdus';
}elseif(!preg_match("/^((373)([0-9]){8})$/", $phone)){
    $phone_error = 'Numărul dvs. de telefon nu este valid';
}
}

if(isset($address)){
if(empty($address)){
    $address_error = 'Your Address is not inserted';
}
}

if(isset($donation_sum)){
if(empty($donation_sum)){
    $donation_sum_error = 'Suma donației dvs. nu este introdusă';
}elseif(!preg_match("/^[1-9]+[0-9]*$/", $donation_sum)){
    $donation_sum_error = 'Suma donației nu este valabilă';
}
}

if(isset($password)){
if(empty($password)){
    $password_error = 'Parola dvs. nu este introdusă';
}elseif(strlen($password) < 8){
    $password_error = 'Parola trebuie să aibă cel puțin 8 caractere ';
}
}

if(isset($password)){
if($password !== $password2){
    $password_error2 = 'Parolele nu s-au potrivit';
} 
}
?>