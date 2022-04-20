<!DOCTYPE html>
<html>
<head> 
 <title> Login </title>
 <meta charset="UTF-8">  
<link rel="apple-touch-icon" sizes="180x180" href="../Resources/Icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../Resources/Icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../Resources/Icon/favicon-16x16.png">
<link rel="stylesheet" type="text/css" href="../CSS/form1.css">
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
$nameErr = $emailErr  = $websiteErr = $problemErr ="";
$name = $email  = $problem = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*Spatiul nu poate fi gol";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "*Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "*Spatiul nu poate fi gol";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Introdu email-ul corect";
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "*Spatiul nu poate fi gol";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "*Introdu URL corect";
    }
  }

  if (empty($_POST["problem"])) {
    $problemErr = "*Spatiul nu poate fi gol";
  } else {
    $problem = test_input($_POST["problem"]);
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
<h2> Raporteaza problema intalnita  </h2>
<br> 
<br>
<p class="rosu""> <span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<p>  Numele: <input type="text" name="name" value="<?php echo $name;?>">  </p>
  <p class="rosu" <span class="error"> <?php echo $nameErr;?></span></p>
  <br><br>
  <p> E-mailul: <input type="text" name="email" value="<?php echo $email;?>">  </p>
  <p class="rosu"> <span class="error"> <?php echo $emailErr;?></span> </p>
  <br><br>
   <p> Linkul paginii: <input type="text" name="website" value="<?php echo $website;?>"> </p>
  <p class="rosu"> <span class="error"><?php echo $websiteErr;?></span> </p>
  <br><br>
   <p> Poblema întâlnită: <textarea name="problem" rows="3" cols="40"><?php echo $problem;?></textarea>  </p>
   <p class="rosu" ><span class="error"><?php echo $problemErr;?></span> </p>
  <br><br>
  <input class="submit" type="submit" name="submit" value="Submit">  
</form>
</div>

</body> 
</html>
