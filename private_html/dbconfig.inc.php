<?php


//Delete my username, password, and db name if working on your local machine
define('DB_USER', 'webenski');
define('DB_PASSWORD', '@PHPmyadmin27');
define('DB_NAME', 'musicDB');
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
