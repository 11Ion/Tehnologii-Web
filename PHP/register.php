<!DOCTYPE html>
<html>
<head> 
 <title> Login </title>
 <meta charset="UTF-8">  
<link rel="apple-touch-icon" sizes="180x180" href="../Resources/Icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../Resources/Icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../Resources/Icon/favicon-16x16.png">
<link rel="stylesheet" type="text/css" href="../CSS/form2.css">
</head>
<body>
<div class="menu">
      <div class="logo"> 
         <a href="..\index.php"> 
            <img src="..\Resources\Icon\logo.png" alt="Logo" width="70" height="70"> 
      </a> 
</div>
<nav>   
   <ul>
      <li>
         <a href="..\PHP\modeles.php"> Modeles 
         </a>
      </li>
      <li>
         <a href="..\PHP\news.php"> Search 
         </a>
      </li>
      <li>
         <a href="..\PHP\contacts.php"> Contacts
         </a> 
      </li>
      <li>
                     <a href="PHP\report.php"> Report
                  </a> 
               </li>
               <li>
                     <a href="PHP\register.php"> Register
                  </a> 
               </li>
               <li>
                     <a href="PHP\test.php"> Test
                  </a> 
               </li>
               
      </ul> 
   </nav>
</div>

<?php

$pass = $confirm_pass = $email = "";
$Errpass = $Errconfirm_pass = $Erremail = "";
$succesemail = $succesconfirm = $succespass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["pass"])) {
    $Errpass = "*Spatiul este gol";
  } else {
    $pass = test_input($_POST["pass"]);
    if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,10}$/",$pass)) {
      $Errpass = "*Parola slaba";    
    }
    else{
      $succespass = "Succesfull";
    }

  }
  if (empty($_POST["confirm_pass"])) {
  $Errconfirm_pass = "*Spatiul este gol";
  }
  if ($_POST["pass"] === $_POST["confirm_pass"]) {
    $succesconfirm = "Parolele coincid";
 }

 else {
  $Errconfirm_pass = "*Parolele trebuie sa coincida";
 }
 

  
  if (empty($_POST["email"])) {
    $Erremail = "*Spatiul este gol";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $Erremail = "*Introdu email corect";
    }
    else 
    $succesemail = "Succesfull!";
  }
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}
?>
<div class="form">
    <br>
<h2> Register </h2>
<br> 
<br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<p>  
  <p> E-mail: <input type="text" name="email" value="<?php echo $email;?>">  </p>
  <p class="rosu">  <?php echo $Erremail;?> </p>
  <p class="green">  <?php echo $succesemail;?> </p>
  <br><br>
  Parola: <input type="password" name="pass" value="<?php echo $pass;?>">  </p>
  <p class="rosu">  <?php echo $Errpass;?> </p>
  <p class="green">  <?php echo $succespass;?>      </p>
  <br><br>
  Comfirmă: <input type="password" name="confirm_pass" value="<?php echo $confirm_pass;?>">  </p>
  <p class="rosu"> <?php echo $Errconfirm_pass;?> </p>
  <p class="coincid">  <?php echo $succesconfirm;?> </p>
  <br><br>
  
 
  <input class="submit" type="submit" name="submit" value="Submit">  
</form>
</div>

</body> 
</html>
