<?php
include('session.php');

// Get users dir and files
$mydir = 'obscured-uploads/' . $user_check;
$myfiles = array_diff(scandir($mydir), array('.', '..'));

?>
<html">

  <head>
    <title>DTU Notes: My files</title>
    <!-- Awesome DTU stylesheet-->
    <link rel="stylesheet" href="dtu-notes-style.css">
  </head>

  <body style="text-align:center;">

    <!-- Red header -->
    <div id="header"> </div>
    <div>
      <div id="logo">
        <img src="pictures/dtu-logo.png">
      </div>
      <div id="backBtn">
        <a href='home.php'>
          <img src="pictures/back-btn.png">
        </a>
      </div>
    </div>

    <h2>You have uploaded the files below</h2>

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