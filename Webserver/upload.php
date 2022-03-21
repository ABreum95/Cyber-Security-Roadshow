<?php
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

  // $allowed = array('txt', 'jpg');

  // Checks and error handling
  // if (in_array($file_ext, $allowed)) { // Check if extension is allowed
  if ($file_error === 0) { // Check if any errors occoured
    if ($file_size <= 2097152) { // Check if file size is too loarge

      // Make uniqe ID
      $file_name_new = uniqid('', true) . $file_name; // File name
      $file_destination = 'uploads/' . $file_name_new; // Upload destionation 

      if (move_uploaded_file($file_tmp, $file_destination)) { // Move tmp file to /uploads
        // Go to back
        echo 'File succesfully uploaded!';
      } else {
        echo 'Something went wrong, please try uploading again.';
      }
    } else {
      echo 'File size is to large';
    }
  } else {
    echo $file_error;
  }
  //} else {
  //  echo 'File extension is not allowed';
  //}
}
