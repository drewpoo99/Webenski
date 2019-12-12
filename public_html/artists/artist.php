<?php

require_once "../../private_html/dbconfig.inc.php";
require_once '../libs/smarty-3.1.33/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir ="../template";
$smarty->compile_dir="../libs/smarty-3.1.33/templates_c";

$sql = "SELECT * FROM Artist ORDER BY Artist_Name";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$artist_names = array();

$old_artist = -1;
if($stmt->rowCount() > 0){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     if($old_artist != $row['Artist_OID']){
    //         if($old_artist != -1){
    //             $artists_names[] = $artists;
    //         }   
    //         $old_artist = $row['Artist_OID'];
    //         $artists = array();
    //         $artists['artist_name'] = $row['Artist_Name'];
    //     }
    // }   
    // echo $row["Artist_OID"] . " " . $row["Artist_Name"];
        $artist_names[] = $row["Artist_Name"];
    }
}

$smarty->assign("artistList", $artist_names);
$smarty->display("artists.tpl");
?>