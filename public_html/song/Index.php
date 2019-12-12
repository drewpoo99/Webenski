<?php

require_once "../../private_html/dbconfig.inc.php";
require_once "../libs/smarty-3.1.33/libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir = "../template";
$smarty->compile_dir="../libs/smarty-3.1.33/templates_c" ;

$sql ="SELECT Song_OID, Title, length as SongTime, Album_Name as Album, Artist_FK
     FROM Song
    JOIN album on song.Album_FK = album.Album_OID
     ORDER BY song_OID";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$SongNumber = array();
$SongName = array();
$ArtistID = array();
$AlbumName = array();
$SongTime = array();

$SongData = array();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
    // Logic writting by Drew to make it work for the presentation
    $SongNumber[] = $row['Song_OID'];
    $SongName[] = $row['Title'];
    $ArtistID[] = $row['Artist_FK'];
    $AlbumName[] = $row['Album'];
    $SongTime[] = $row['SongTime'];
    



    // Original logic that needed to be fixed for the presentation
    // foreach ($row as $column => $value){
    //     echo "$value<br>";
    //     $SongName = $value;
    //     }
}

$smarty->assign("Song_Number", $SongNumber);
$smarty->assign("Song_Name", $SongName);
$smarty->assign("Artist_ID", $ArtistID);
$smarty->assign("Album_Name", $AlbumName);
$smarty->assign("Song_Time", $SongTime);
$smarty->display('Song List.tpl');
?>

