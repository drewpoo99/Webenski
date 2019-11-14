<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artists</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap Overriding Styles -->
    <link rel="stylesheet" href="../../globalstyles.css">
    <link rel="stylesheet" href="../artists/artist_list/artist_list.css">

</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
    <!-- Nav Bar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="../../assets/WebenskiLogo.png" width="100" height="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Discover
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../artists/artist.php">Artists</a>
                            <a class="dropdown-item" href="../album/">Albums</a>
                            <a class="dropdown-item" href="../../song/song_list/song_list.html">Songs</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="../../playlist/playlist_list/Playlist list.html">Playlists</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../profile/profile.php">Profile</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <h1>Artists Library</h1>
    <!-- Artist List -->
    {* <div class="container-fluid">
        <div class="row"> *}
        {foreach $artistList as $artistName => $artist}
            <h3> Name: {$artist}</h3>
        {/foreach}
        <a href="viewArtist.php">View Single Artist</a>
        {* </div>
    </div> *}


            {* <div class="col-6 artist-list">
                <div class="list-group">
                    <a href="../../song/view_song/View Song.html" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-6">
                                {* <img class="album-image" src="../assets/WB Logo.png" alt=""> *}
                            {* </div>
                            <div class="col-6">
                                <h4>{$artist}</h4>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> *}



    {* <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-4" id="myScrollspy">
                <ul class="nav nav-pills flex-column">
                    <h5>Find Artists By Name</h5>
                    <li class="nav-item">
                        <a class="nav-link active" href="#section1">A-E</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">F-K</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">L-O</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section4" class="nav-link">Q-S</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section5" class="nav-link">T-Z</a>
                    </li>
                </ul>
            </nav>
            <div class="col-sm-9 col-8">
                <div id="section1" class="section">
                    <h1>A-E</h1>
                    <div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div id="section2" class="section">
                    <h1>F-K</h1>
                    <div class="row">
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/artists/kendrick.jpg">
                                    <p><a href="../../artists/artist_view/artist.html"> Kendrick Lamar</a></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="artist-block">
                                    <img src="../../assets/WB Logo.png">
                                    <p>Artist Name</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div id="section3" class="section">
                    <h1>L-O</h1>
                    <div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="section4" class="section">
                    <h1>Q-S</h1>
                    <div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="section5" class="section">
                    <h1>T-Z</h1>
                    <div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="artist-block">
                                <img src="../../assets/WB Logo.png">
                                <p>Artist Name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> *}
    <!-- Boostrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>