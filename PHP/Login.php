<!DOCTYPE html>
<html>
   <head>
      <title> Login
      </title>
      <meta charset="UTF-8">
      <link rel="apple-touch-icon" sizes="180x180" href="../Resources/Icon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../Resources/Icon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../Resources/Icon/favicon-16x16.png">
      <link rel="stylesheet" type="text/css" href="../CSS/form3.css">
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
                  <a href="..\PHP\report.php"> Report
                  </a> 
               </li>
               <li>
                  <a href="..\PHP\register.php"> Register
                  </a> 
               </li>
               <li>
                  <a href="..\PHP\login.php"> Login
                  </a> 
               </li>
            </ul>
         </nav>
         <div class="errorr">   <p class="redalert"> Se pare că ai introdus parola sau loginul greșit </p> </div>
      </div>
      <?php 
         $usernameErr = $passwordErr = "";
         $username = "";
         $password = "";
         $error = "";
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
               $usernameErr = "*";
          }
          if (empty($_POST["password"])) {
            $passwordErr = "*";
          }
         if ($_POST['username']=="admin" && $_POST['password']=="qwerty123"){
            $_SESSION['login'] = true; header('LOCATION:welcome.php'); die();
         }
         else {
            $error = "*Loginul sau parola incorectă";
            $error = '<style>.errorr{ display:block;}</style>';
         }
         }
         ?>
      <div class="form1" >
         <img class="image" src="../Resources/Icon/user.png" width="150" height="150">
         <p class="eticheta"> Login </p>
         <br>
         <form  id="basic-form" method="post" name="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <p class="text"> Username 
               <input class="username" type="text" name="username" id="username" value="<?php echo $username;?>" required/>
               <span class="error"> 
                  <?php echo $usernameErr;?> 
               </span> 
            </p>
            <p class="text"> Password  
               <input class="password" type="password" name="password" id="password" value="<?php echo $password;?>" required/>
               <span class="error"> <?php echo $passwordErr;?>  
            </span> 
            </p>
            <p class="errorlog" >  
               <?php echo $error;?>  </p>
            <input class="submit" type="submit" name="Submit" value="Login">
         </form>
      </div>
      <script src="../JS/script1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

   </body>
</html>