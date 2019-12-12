<?php
require_once "../../private_html/dbconfig.inc.php";
require_once "..//libs/smarty-3.1.33/libs/Smarty.class.php";

$albumID = $_POST['Album_ID'];
$songName = $_POST['song_name'];
$ratingNumber = 0;
echo $songName;

if(array_key_exists('add_song', $_POST)){
    addSong($songName, $pdo, $albumID);
}
elseif(array_key_exists('del_song',$_POST)){
    echo("delete song key");
    delSong($songName, $pdo);
}
elseif(array_key_exists('change_rating',$_POST)){
    echo("change rating key");
    if(isset($_POST['starRating']) and $_POST['starRating'] == "1") {
        $ratingNumber = '1';
    }elseif(isset($_POST['starRating']) and $_POST['starRating'] == "2") {
        $ratingNumber = '2';
    }elseif(isset($_POST['starRating']) and $_POST['starRating'] == "3") {
        $ratingNumber = '3';
    }elseif(isset($_POST['starRating']) and $_POST['starRating'] == "4") {
        $ratingNumber = '4';
    }elseif(isset($_POST['starRating']) and $_POST['starRating'] == "5") {
        $ratingNumber = '5';
    }
    changeRating($ratingNumber, $pdo);
}
else{
    echo("array key doesnt exist");
}
function addSong($song, $pdo, $albumID){
    $sql ="UPDATE song SET Album_FK = $albumID WHERE Title = '$song'";
    $stmt = $pdo -> prepare($sql);
    $stmt->execute();
}
function delSong($song, $pdo){
    $sql ="UPDATE song SET Album_FK = '0' WHERE Title = '$song'";
    $stmt = $pdo -> prepare($sql);
    $stmt->execute();
}
function changeRating($ratingNumber, $pdo){
    echo("change num test");
    $sql = "UPDATE album_rating SET Rating_OID = $ratingNumber WHERE User_Rating_OID = '1'";
    $stmt = $pdo -> prepare($sql);
    $stmt->execute();
}
echo("Done");
header('Location: test.php');
