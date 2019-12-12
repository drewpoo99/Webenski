<?php


require_once "../private_html/dbconfig.inc.php";
require_once "../public_html/libs/smarty_php/libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir = "../template";
$smarty->compile_dir = "../public_html/libs/smarty_php/templates_c";

$sql = "SELECT Title, length as SongTime, Album_Name as Album, Artist_Name as Artist_FK 
FROM Song 
JOIN album on song.Album_FK = album.Album_ID 
JOIN artist on song.Artist_FK = artist.Artist_ID";


$stmt = $pdo->prepare($sql);
$stmt->execute();

$PlaylistName = array();
$Username = array();
$ArtistID = array();
$SongName = array();
$AlbumName = array();
$SongTime = array();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
    foreach ($row as $column => $value){
        $PlaylistName [0] = $row{'PlayList_Name'};
        $Username[0] = $row['User_Name'];
        $SongNumber[0] = $row['Song_OID'];
        $SongName[0] = $row['Title'];
        $ArtistID[0] = $row['Artist_FK'];
        $AlbumName[0] = $row['Album'];
        $SongTime[0] = $row['SongTime'];

        //Test
        //echo "$value<br>";
        //$PlaylistName = $value;
    }
}

$smarty->assign("Playlist_Name", $PlaylistName);
$smarty->assign("User_Name", $Username);
$smarty->assign("Artist_ID", $ArtistID);
$smarty->assign("Song_Name", $SongName);
$smarty->assign("Album_Name", $AlbumName);
$smarty->assign("Song_Time", $SongTime);
$smarty->display('View Song.tpl');

?>