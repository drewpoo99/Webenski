<?php

require_once "../../private_html/dbconfig.inc.php";
require_once '../libs/smarty-3.1.33/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir ="../template";
$smarty->compile_dir="../libs/smarty-3.1.33/templates_c";

$sql = "SELECT * FROM Album 
            Join Artist ON Album.Artist_FKALB = Artist.Artist_OID
        ORDER BY Album_Name";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$albums = array();
$oldAlbum = -1;

if($stmt->rowCount() > 0){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        if($oldAlbum != $row['Album_OID']){
            if($oldAlbum != -1){
                $albums[] = $albums_list;
            }
            $oldAlbum = $row['Album_OID'];
            $albums_list = array();
            $albums_list['Name'] = $row["Album_Name"] . "  (" . $row['Artist_Name'] . ")";
            $albums_list['Image'] = $row['Image_URL'];
        }
    }
}

$albums[] = $albums_list;
$smarty->assign("albumList", $albums);
$smarty->display("albums.tpl");
?>