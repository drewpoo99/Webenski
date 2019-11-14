<?php

require_once "../private_html/dbconfig.inc.php";
require_once "../public_html/libs/smarty_php/libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir = "../template";
$smarty->compile_dir="../public_html/libs/smarty_php/templates_c" ;

$sql ="SELECT Song_ID, Title, length as SongTime, Album_Name as Album, Artist_FK
     FROM Song
    JOIN album on song.Album_FK = album.Album_ID
     ORDER BY song_ID";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$SongNumber = array();
$SongName = array();
$ArtistID = array();
$AlbumName = array();
$SongTime = array();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
    foreach ($row as $column => $value){
        echo "$value<br>";
        $SongName = $value;
        }
}

$smarty->assign("Song_Number", $SongNumber);
$smarty->assign("Song_Name", $SongName);
$smarty->assign("Artist_ID", $ArtistID);
$smarty->assign("Album_Name", $AlbumName);
$smarty->assign("Song_Time", $SongTime);
$smarty->display('Song List.tpl');
?>

