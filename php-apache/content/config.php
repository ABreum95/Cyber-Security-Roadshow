<?php
   define('DB_SERVER', 'mysql');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'password');
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
/*
   echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL. "\n";
   echo "Host information: " . mysqli_get_host_info($db) . PHP_EOL. "\n";*/
?>
