<?php 
if(!isset($success)){
    $success = '';
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title> Contact
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
          <a href="Modeles.php"> Modeles 
                  </a>
        </li>
        <li>
          <a href="news.php"> Search 
                  </a>
        </li>
        <li>
          <a href="donate.php"> Donate
                  </a>
        </li>
        <li>
          <a href="register.php"> Register
                  </a>
        </li>
        <li>
          <a href="contact.php"> Contact
                  </a>
        </li>
      </ul>
    </nav>
<div class="form">
   <div class="contact"> 
<p class="contact1">Contacteazăne<p>
<form action="contact-form.php" id="form" method="POST">
<input class="inputform" type="text" id="name" name="name" placeholder="Nume"><br><br>
<p class="error_form" id="name_error_message"></p>
<input class="inputform" type="text" id="email" name="email" placeholder="Email"><br><br>
<p class="error_form" id="email_error_message"></p>
<input class="inputform1" type="text" id="message" name="message" placeholder="Mesaj"><br><br>
<input class="submit" type="submit" id="submit" value="Send" name="submit">
<p id="validationText"></p>
<?php if(isset($name_error)){ ?>
    <p class="php_error"> <?php echo $name_error ?> </p>
<?php } ?>
<?php if(isset($email_error)){ ?>
    <p class="php_error"> <?php echo $email_error ?> </p>
<?php } ?>
<?php if(!isset($name_error) && !isset($email_error)){ ?>
    <p class="php_error"> <?php echo $success ?> </p>
<?php } ?>
</form>
</div>
</div>
</div>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../JS/contact-validation.js"></script>
   </body>
</html>