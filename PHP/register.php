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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      </div>

<div class="form">
<div class="register">
	<p class="register1"> Register </p>
	</div>	
<form action="register-validation.php" id="form" method="post">
<input class="inputform" type="text" id="fname" name="fname" placeholder="Nume"><br><br>
<p class="error_form" id="fname_error_message"></p>
<input class="inputform" type="text" id="sname" name="sname" placeholder="Prenume"><br><br>
<p class="error_form" id="sname_error_message"></p>
<input class="inputform" type="text" id="email" name="email" placeholder="Email"><br><br>
<p class="error_form" id="email_error_message2"></p>
<input class="inputform" type="password" id="password" name="password" placeholder="Parola"><br><br>
<p class="error_form" id="password_error_message"></p>
<input class="inputform" type="password" id="password2" name="password2" placeholder="Repetă parola"><br><br>
<p class="error_form" id="password_error_message2"></p>
<input class="submit" type="submit" id="submit" value="Send" name="submit">
<p class="green" id="validationText"></p>
</form>
</div>
</div>
</div>
</div>
</header>
<script src="../JS/validation-functions.js"></script>
<script src="../JS/register_validation.js"></script>
</body>
</html>