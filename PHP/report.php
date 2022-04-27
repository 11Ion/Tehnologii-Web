<!DOCTYPE html>
<html>
   <head>
      <title> Report
      </title>
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
                  <a href="PHP\login.php"> Login
                  </a>
               </li>
            </ul>
         </nav>
      </div>
      <?php
         $varinat1 = "";
         $name = $varinat = $comment = "";
         $nameErr = $varinatErr = "";
         $success ="";
         $successform = "";
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          if (empty($_POST["name"])) {
             $nameErr = "*";
         }
         else{
            $name = TRUE;
            $name = test_input($_POST["name"]);
         
         }
         
         if (empty($_POST["variant"])) {
          $varinatErr = "*";
         }
          else {
             $varinat = TRUE;  
             $varinat = "";
             $varinat1 = test_input($_POST["variant"]);
          }
          if (empty($_POST["comment"])) {
             $comment = "";
          }
          else {
             $comment = TRUE;
             $comment = test_input($_POST["comment"]);
         
          }
         
          if ($_POST['name'] == TRUE && $_POST['variant'] == TRUE) {
             $success = '<style>.form1 { display:none;}</style>';
             $successform = '<style>.form2 { display:block;}</style>';
          }}
         
          function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
           }
          
         
         ?>  
      <div class="form2">
         <img class="image2" src="../Resources/Icon/report.png" width="150" height="150">
         <p class="text3"> Utilizatorul: 
            <span class="red"> 
            <?php echo $name ?>
            </span> 
            a fost raportat ca 
            <span class="red">" 
            <?php echo $varinat1 ?> " 
            </span>
            <br> 
            <span class="gray2"> Comentariul :  
            <?php echo $comment ?>  
         </p>
      </div>
      <div class="form1">
         <img class="image" src="../Resources/Icon/report.png" width="150" height="150">
         <p class="eticheta"> Raportează utilizator 
         </p>
         <br>
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p class="text"> Numele utilizatorului :
               <input class="name" type="text" name="name" value="<?php echo $name;?>">
               <span class="error">
               <?php echo $nameErr;?>
               </span> 
            </p>
            <p class="text"> Alege una din varinate de mai jos:
               <?php echo $varinat;?>
               <span class="error"> <?php echo $varinatErr;?> </span>
            </p>
            <p class="radio ">
               <input type="radio" name="variant" <?php if (isset($varinat) && $varinat=="Spam" ) ?> value="Spam" > Spam
               <br>
               <input type="radio" name="variant" <?php if (isset($varinat) && $varinat=="Cont furat" ) ?>value="Cont furat"> Cont furat
               <br>
               <input type="radio" name="variant" <?php if (isset($varinat) && $varinat=="Alt motiv" ) ?> value = "Alt motiv"> Alt motiv
            </p>
            <p class="text"> Comentariu <span class="gray"> (opțional) </span>: </p>
            <textarea name="comment" rows="5" cols="40"> </textarea>
            <?php echo $success;?>
            <?php echo $successform;?>
            <input class="submit" type="submit" name="Submit" value="Submit">
         </form>
      </div>
   </body>
</html>