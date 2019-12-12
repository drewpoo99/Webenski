<?php
require_once "../private_html/dbconfig.inc.php";
require_once "../public_html/libs/smarty_php/libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "../template";
$smarty->compile_dir="../public_html/libs/smarty_php/templates_c" ;
//if (isset($GET['id'])){
//    include "View Playlist.php";
//    exit();
//}
$sql = "SELECT Title, length as SongTime, Album_Name as Album, Artist_Name as Artist_FK 
FROM Song 
JOIN album on song.Album_FK = album.Album_ID 
JOIN artist on song.Artist_FK = artist.Artist_ID";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$SongPlaylist = array();
$TotalSongTime = array();
$PlaylistName = array();
$UserName = array();
$PlaylistSong = array();
$ArtistID = array();
$AlbumName = array();
$SongTime = array();
$SongName = array();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
    foreach ($row as $column => $value){
        //echo "$value<br>";
        //$SongPlaylist =$value;
        $PlaylistName [1] = $row{'PlayList_Name'};
        $Username[1] = $row['User_Name'];
        $SongNumber[] = $row['Song_OID'];
        $SongName[] = $row['Title'];
        $ArtistID[] = $row['Artist_FK'];
        $AlbumName[] = $row['Album'];
        $SongTime[] = $row['SongTime'];
    }
}

$smarty->assign("Songs_In_Playlist", $SongPlaylist);
$smarty->assign("Total_Song_Time", $TotalSongTime);
$smarty->assign("Playlist_Name", $PlaylistName);
$smarty->assign("User_Name", $UserName);
$smarty->assign("Song_Name", $SongName);
$smarty->assign("Artist_ID", $ArtistID);
$smarty->assign("Album_Name", $AlbumName);
$smarty->assign("Song_Time", $SongTime);
$smarty->display('View Playlist.tpl');
?>