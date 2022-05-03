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

  // Can be used to restrict file upload
  // $allowed = array('txt', 'jpg');


  $upload_message = '';
  // Checks and error handling
  // if (in_array($file_ext, $allowed)) { // Check if extension is allowed
  if ($file_error === 0) { // Check if any errors occoured
    if ($file_size <= 2097152) { // Check if file size is too large

      // Make uniqe ID
      $file_name_new = uniqid('', false) . $file_name; // File name
      $file_destination = 'uploadsObscured1337/' . $_SESSION['myusername'] . '/' . $file_name_new; // Upload destionation 

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
  //} else {
  //  echo 'File extension is not allowed';
  //}

  // Go to back


} ?>

<html">

  <head>
    <title>Upload</title>
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

    <h2><?php echo $upload_message ?></h2>


    <!-- Red footer -->
    <div id="footer"></div>

  </body>

  </html>