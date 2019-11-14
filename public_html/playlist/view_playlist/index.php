<?php

require_once "../private_html/dbconfig.inc.php";
require_once "../public_html/libs/smarty_php/libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir = "../../template";
$smarty->compile_dir="../public_html/libs/smarty_php/templates_c" ;

//if (isset($GET['id'])){
//    include "View Playlist.php";
//    exit();
//}

$sql = "SELECT Title FROM Song";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
    foreach ($row as $column => $value){
        //echo "$value<br>";
        $SongPlaylist =$value;
    }
}

$SongPlaylist = array();
$TotalSongTime = array();
$PlaylistName = array();
$UserName = array();
$PlaylistSong = array();
$ArtistID = array();
$AlbumName = array();
$SongTime = array();


$smarty->assign("Songs_In_Playlist", $SongPlaylist);
$smarty->assign("Total_Song_Time", $TotalSongTime);
$smarty->assign("Playlist_Name", $PlaylistName);
$smarty->assign("User_Name", $UserName);
$smarty->assign("Song_In_Playlist_ID", $PlaylistSong);
$smarty->assign("Artist_ID", $ArtistID);
$smarty->assign("Album_Name", $AlbumName);
$smarty->assign("Song_Time", $SongTime);
$smarty->display('View Playlist.tpl');
?>