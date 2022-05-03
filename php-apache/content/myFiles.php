<?php
include('session.php');

// Get users dir and files
$mydir = 'uploadsObscured1337/' . $user_check;
$myfiles = array_diff(scandir($mydir), array('.', '..'));

?>
<html">

  <head>
    <title>Your personal files</title>
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
        <a href='home.php'>
          <img src="Pictures/BackBtn.png">
        </a>
      </div>
    </div>

    <h2>Here you can access all your notes!</h2>

    <!-- List files -->
    <td>
      <?php
      foreach ($myfiles as $filename) {
      ?>
        <a href=<?= $mydir . '/' . $filename ?>><?= $filename ?></a>
        <br>
      <?php
      } ?>
    </td>


    <!-- Red footer -->
    <div id="footer"></div>

  </body>

  </html>