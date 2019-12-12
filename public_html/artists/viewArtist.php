<?php

require_once "../../private_html/dbconfig.inc.php";
require_once '../libs/smarty-3.1.33/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir ="../template";
$smarty->compile_dir="../libs/smarty-3.1.33/templates_c";

$sql = "SELECT * FROM Artist 
        JOIN Song on Song.Artist_FK = Artist.Artist_OID
        WHERE Artist_OID = 6";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$artist_songs = array();
if($stmt->rowCount() > 0){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $artist_name = $row['Artist_Name'];
        $artist_songs[] = $row['Title'];
    }
}

$smarty->assign("artist_name", $artist_name);
$smarty->assign("artist_songs", $artist_songs);
$smarty->display("artistview.tpl");
?>