<?php


//Delete my username, password, and db name if working on your local machine
define('DB_USER', 'csadmin');
define('DB_PASSWORD', 'spid3r');
define('DB_NAME', 'musicDB');

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
