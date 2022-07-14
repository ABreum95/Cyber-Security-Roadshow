<?php
   # Config file for the database
   define('DB_SERVER', 'mysql');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Ko2PgTMFuxfF');
   define('DB_DATABASE', 'db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "</br>";

    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "</br>";

    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
   }
?>