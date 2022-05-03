<?php
session_start();
include("config.php");

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Username and password sent from form 

   // Strings escaped
   $myusername = mysqli_real_escape_string($db, $_POST['username']);
   $mypassword = mysqli_real_escape_string($db, $_POST['password']);

   // SQL reguest
   $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
   $result = mysqli_query($db, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);

   // If result matched $myusername and $mypassword, table row must be 1 row
   if ($count == 1) {
      $_SESSION['myusername'] = $myusername;
      $_SESSION['login_user'] = $myusername;
      header("location: home.php"); // Login and go to home page
   } else {
      $error = "Your Login Name or Password is invalid";
   }
}
?>

<html>

<head>
   <title>Login Page</title>
   <!-- Awesome DTU stylesheet-->
   <link rel="stylesheet" href="DTU Notes Style.css">
</head>

<body style="text-align:center;">
   <!-- Red header -->
   <div id="header"> </div>
   <div>
      <div id="logo">
         <img src="Pictures/dtu-logo.png">
      </div>
      <div id="backBtn">
         <a href='index.html'>
            <img src="Pictures/BackBtn.png">
         </a>
      </div>
   </div>

   <!-- Login box -->
   <!-- Note to self: Remember to ask B to change his password, it is not that strong! -->
   <div style="height: 30px;"> </div>
   <div id="loginBox">
      <div id="loginTop"><b>Login</b></div>

      <div id="loginInnerBox">

         <form action="" method="post">
            <label>UserName :</label><input type="text" name="username" class="box" /><br /><br />
            <label>Password :</label><input type="password" name="password" class="box" /><br /><br />
            <input id="logingSubmit" type="submit" value=" Submit " /><br />
         </form>
      </div>

      <!-- Error if login is wrong-->
      <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

   </div>
   <!-- Red footer -->
   <div id="footer"></div>

</body>

</html>