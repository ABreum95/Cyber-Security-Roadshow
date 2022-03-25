<?php
  
   $db = new mysqli("db", "root", "example");

   if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "</br>";

    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "</br>";

    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
   }

   echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL. "\n";
   echo "Host information: " . mysqli_get_host_info($db) . PHP_EOL. "\n";

   /*
   if (mysqli_connect_errno()) {
	echo("Connect failed: %s\n", mysqli_connect_error());
   }*/

?>
