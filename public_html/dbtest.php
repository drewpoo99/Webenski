<?php

require_once "../private_html/dbconfig.inc.php";
// require_once './libs/smarty-3.1.33/libs/Smarty.class.php';

// $smarty = new Smarty();
// $smarty->template_dir ="./template";
// $smarty->compile_dir="./libs/smarty-3.1.33/templates_c";

// $smarty->display('login.tpl');

$sql = "SELECT * FROM User";
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "Trying to see if the database works <br>";
echo $sql;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   echo $row['First_Name'] . "<br>";
}


?>