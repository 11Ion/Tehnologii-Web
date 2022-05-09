<!DOCTYPE html>
<html>
   <head>
      <title> Register
      </title>
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
     <div class="errorr">   <p class="redalert"> Se pare că ai introdus date incorecte. Mai incearcă </p> </div>

      </div>
      
      <?php
         $username = $email = $password = $confirm = "";
         $usernameErr = $emailErr = $passwordErr = $confirmErr = "";
         $usernameS = $emailS = $passwordS = $confirmS = "";
         $success = "";
         $error = "";
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          if (empty($_POST["username"])) {
             $usernameErr = "*";
          }
         else{
           $username = test_input($_POST["username"]);
         if (!preg_match('/^[a-z0-9]{4,12}/', $_POST['username'])){
          $usernameErr = "*Format greșit";  
          }
         else{
           $usernameS = true;
           $username = test_input($_POST["username"]);
         }}
          
         if (empty($_POST["email"])) {
           $emailErr = "*";
         } else {
           $email = test_input($_POST["email"]);
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $emailErr = "*Format greșit";
           }
           else {
             $emailS = true;
             $email = "";
           }
         }
         
         if (empty($_POST["password"])) {
           $passwordErr = "*";
         }
         else {
         $password = test_input($_POST["password"]);
         if (preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,10}/", $_POST['password'])){
         $password = "";
         $passwordS = true;
         }
         else{
         $passwordErr = "*Parolă prea ușoară";
         }
         }
           
         
          
          
          if (empty($_POST["confirm"])) {
           $confirmErr = "*";
         }
         else{
           $confirm = test_input($_POST["confirm"]);
         if ($_POST['password']  == $_POST['confirm'])  {
           $confirmS = true;
           $confirm = "";
         }
         else{
         $confirmErr = "*Parolele nu coincid";
         }
         }
         if ( $usernameS == true && $emailS == true && $passwordS == true && $confirmS == true ){
         $success = '<style>.form1 { display:none;} .form2 { display:block;}</style>';
         }
            else{
            $error = '<style>.errorr{ display:block;}</style>';
           }

         }
         
          function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
           }
          
         
         ?>  
      <div class="form2">
         <img class="image2" src="../Resources/Icon/user.png" width="200" height="200">
         <p class="text3"> Utilizatorul 
            <span class="green"> <?php echo $username ?>
          </span> a fost înregistrat cu succes </p>
      </div>
      <div class="form1">
         <img class="image" src="../Resources/Icon/user.png" width="150" height="150">
         <p class="eticheta"> Înregistrează un cont nou 
         <p>
            <br>
             <form id="basic-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p class="text"> Username 
               <input class="username" type="text" name="username"  value="<?php echo $username ?>" required/>
               <span class="error"> <?php echo $usernameErr ?> 
            </span>
            </p>
            <p class="text"> Email 
               <input class="email" type="text" name="email" value="<?php echo $email ?>" required/>
               <span class="error"> 
                  <?php echo $emailErr ?> 
               </span> 
            </p>
            <p class="text"> Password  
               <input class="password" type="password" name="password" value="<?php echo $password ?>" required/>
               <span class="error"> 
                  <?php echo $passwordErr ?> 
               </span> 
            </p>
            <p class="text"> Confirm Password   
               <input class="confirm" type="password" name="confirm" value="<?php echo $confirm ?>" required/>
               <span class="error">
                   <?php echo $confirmErr ?> 
                  </span> 
                  </p>
            <?php echo $success ?>
            <?php echo $error ?>
            <input class="submit" type="submit" name="Submit" value="Register">
         </form>
      </div>
      <script src="../JS/script1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
   </body>
</html>