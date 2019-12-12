<?php

    session_start();

require_once "../../private_html/dbconfig.inc.php";
require_once '../libs/smarty-3.1.33/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir ="../template";
$smarty->compile_dir="../libs/smarty-3.1.33/templates_c";


$id = $_SESSION["user_id"];

$sql = "SELECT * FROM User where User_OID = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $user_email = $row['Email'];
    $user_username = $row['username'];
    $user_full_name = $row['First_Name'] . " " .$row['Last_Name'];
}


$smarty->assign('user_full_name', $user_full_name);
$smarty->assign('user_email', $user_email);
$smarty->assign('user_username', $user_username);
$smarty->display('profile.tpl');
?>