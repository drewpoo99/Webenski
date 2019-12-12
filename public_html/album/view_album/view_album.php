<?php
define('DB_USER', 'root');
define('DB_PASSWORD', 'D0ntL0seMessiah');
define('DB_NAME', 'musicdb');
$db_name = DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;
try {    //result: mysql:StudentCourse;host=localhost
    $dsn = "mysql:dbname=" . DB_NAME . ";" . "host=localhost";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href= View_album.css>
    <!-- Next is for use of stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>View Album</title>
</head>
<body>
<div class="container-fluid">

    <h1>
        <img alt="logo" class="logo" src="../../assets/WebenskiLogo.png">
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3>Album Name</h3>
                <img alt="alt logo" class="WB" src="../../assets/WB Logo.png">
                <h5>By Artist</h5>
                <h6># Songs, # min, Genre</h6>
                <button type="button" class="btn btn-primary">Play</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <table>
            <tr>
                <th>Order</th>
                <th>Song Title</th>
                <!--<th>Artist</th>
                <th>Original Album</th>-->
            </tr>
            <?php
            $sql = "SELECT * From song WHERE Album_FK = '8'";
            $stmt = $pdo -> prepare($sql);
            $stmt->execute();
            $counter = 0;
            if($stmt->rowCount() > 0){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $counter++;
                    echo"<tr><td>".$counter."</td><td>".$row["Title"]."</td></tr>";
                }
            }else{
                echo"Uh oh not again";
            }
            ?>
            <tr>
                <form action="view_album_modify.php" method="post">
                    <td><p>Add a song: </p></td>
                    <td><input type="text" name="song_name"></td>
                    <input type="hidden" name="Album_ID" value="8">
                    <td><button type="submit" class="btn btn-primary"
                                name="add_song" value="add_song">Add Song</button></td>
                    <td><button type="submit" class="btn btn-primary"
                                name="del_song" value="del_song">Remove Song</button></td>
                </form>
            </tr>
        </table>
        <!-- Code Edited by Liam starts here -->
        <br>
        <h3>Reviews</h3>
        <hr>
        <!-- Temporary reviews to be substituted with real ones eventually -->
        <div class="row">
            <div class="col-3">
                <p>This is one of the best albums I have ever listened too! Recommending to all my friends!</p>
                <!-- Name, Review, and Star count will all be listed separately -->
                <!-- Stars will also be placeholders until working ones are put in -->
                <p>★★★★☆</p>
                <p>- Toby</p>
            </div>
        </div>
    </div>
    <br>
    <h5>Like the album? Leave a star rating below! (Only one rating per album per user)</h5>
    <hr>
    <div class="form-group-row">
        <h4>This is what you currently have it rated as:</h4>
        <?php
        $rate= '2';
        $sql = "SELECT Rating_OID FROM album_rating WHERE User_Rating_OID = '1'";
        $stmt = $pdo -> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo("<h3>" . $row["Rating_OID"] . " Stars!</h3>");
        }

        ?>
    </div>
    <form action="view_album_modify.php" method="post">
        <div class="form-group-row">
            <h4>Want to give it a different rating? Click a button and press submit!</h4>
            <div class="form-group row">
                <div class="col-8">
                    <input type="radio" name="starRating" value="1">1 Star
                    <input type="radio" name="starRating" value="2">2 Star
                    <input type="radio" name="starRating" value="3">3 Star
                    <input type="radio" name="starRating" value="4">4 Star
                    <input type="radio" name="starRating" value="5">5 Star
                    <button type="submit" class="btn btn-primary"
                            name="change_rating" value="change_rating">Change Rating</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Edits by Liam end here -->
</div>
</div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
