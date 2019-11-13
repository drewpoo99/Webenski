<?php

// put your own creds in here
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_NAME', ''); 
$db_name = DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;


try {    //result: mysql:StudentCourse;host=localhost
    $dsn = "mysql:dbname=" . DB_NAME . ";" . "host=localhost";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
