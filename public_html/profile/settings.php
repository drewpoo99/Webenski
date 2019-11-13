<?php

require_once "../../private_html/dbconfig.inc.php";
require_once '../libs/smarty-3.1.33/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir ="../template";
$smarty->compile_dir="../libs/smarty-3.1.33/templates_c";


// I use !empty here instead of !isset because isset allows null values
// and that is not good, empty only allows true or false
if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])){
    $new_first_name = $_POST['first_name'];
    $new_last_name = $_POST['last_name'];
    $new_email = $_POST['email'];

    $sql = "UPDATE User SET First_Name = '$new_first_name',
                        Last_Name = '$new_last_name',
                        email = '$new_email'
                        WHERE user_oid = 11";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $smarty->assign("new_first_name", $new_first_name);
    $smarty->assign("new_last_name", $new_last_name);
    $smarty->assign("new_email", $new_email);
    $smarty->display('results.tpl');
}else{
    $smarty->display('profileSettings.tpl');
}


?>