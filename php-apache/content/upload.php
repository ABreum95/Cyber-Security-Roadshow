<?php
session_start();
if (isset($_FILES['file'])) {
  $file = $_FILES['file'];

  // File properties
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $file_error = $file['error'];

  // Work out the file extension
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));

  $upload_message = '';
  // Checks and error handling
  if ($file_error === 0) { // Check if any errors occoured
    if ($file_size <= 2097152) { // Check if file size is too large

      // Make unique ID
      $file_name_new = uniqid('', false) . $file_name; // File name
      $file_destination = 'obscured-uploads/' . $_SESSION['myusername'] . '/' . $file_name_new; // Upload destionation 

      if (move_uploaded_file($file_tmp, $file_destination)) { // Move tmp file to /uploads
        $upload_message = 'File succesfully uploaded!';
      } else {
        $upload_message = 'Something went wrong, please try uploading again.';
      }
    } else {
      $upload_message = 'File size is to large';
    }
  } else {
    $upload_message = $file_error;
  }
} ?>

<html">

  <head>
    <title>Upload</title>
    <!-- Awesome DSB stylesheet-->
    <link rel="stylesheet" href="dsb-notes-style.css">
  </head>

  <body style="text-align:center;">

    <!-- Red header -->
    <div id="header"> </div>
    <div>
      <div id="logo">
        <img src="pictures/dsb-logo.png">
      </div>
      <div id="backBtn">
        <a href='home.php'>
          <img src="pictures/back-btn.png">
        </a>
      </div>
    </div>

    <h2><?php echo $upload_message ?></h2>


    <!-- Red footer -->
    <div id="footer"></div>

  </body>

  </html>
