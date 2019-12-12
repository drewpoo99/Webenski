<?php


require_once "../../../private_html/dbconfig.inc.php";
require_once "../../libs/smarty-3.1.33/libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "../../template";
$smarty->compile_dir="../../libs/smarty-3.1.33/templates_c" ;

$sql = "SELECT Title, length as SongTime, Album_Name as Album, Artist_Name as Artist_FK 
FROM Song 
JOIN Album on Song.Album_FK = Album.Album_OID 
JOIN Artist on Song.Artist_FK = Artist.Artist_OID";


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
        // $PlaylistName [0] = $row['PlayList_Name'];
        // $Username[0] = $row['User_Name'];
        // $SongNumber[0] = $row['Song_OID'];
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