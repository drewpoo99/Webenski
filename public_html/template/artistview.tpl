<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist View - {$artist_name}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap Overriding Styles -->
    <link rel="stylesheet" href="../globalstyles.css">

    <!-- File Styles -->
    <link rel="stylesheet" href="../artists/artist_view/artist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
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
                            <a class="dropdown-item" href="../../album/album_list/album_list.html">Albums</a>
                            <a class="dropdown-item" href="../song/index.php">Songs</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../playlist/playlist_list/Playlist list.html">Playlists</a>

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

    <!-- Artist Section -->
    <div class="container artist-container">
        <!-- Artist Image/Name/Rating/Add -->
        <div class="row">
            <div class="col-8">
                <img class="artist-image" src="../assets/artists/boston.jpg">
            </div>
            <div class="col-4">
                <h1 id="artist-name">{$artist_name}</h1>
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div id="add-or-edit">
                    <p><a href="#">Add Artist To Library</a></p>
                    <p><a href="#">Edit Artist</a></p>
                </div>
            </div>
        </div>
        <!-- Artists Discography -->
         <div class="row discography">
            <div class="col-12" id="disco-label">
                <h2>Discography</h2>
            </div>
            <!-- Albums -->
            <div class="col-6 albums">
                <h3>Songs</h3>
                <div class="list-group">
                {foreach $artist_songs as $artistSong => $song}
                {* <p>{$song}</p> *}
                <a href="#" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-6">
                                <img class="album-image" src="../assets/WB Logo.png" alt="">
                            </div>
                            <div class="col-6">
                                <h4>{$song}</h4>
                                <small>2017</small>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                {/foreach}
                    
            {* <!-- This section will be the albums, need to do some database work -->

            
            <div class="col-6 singles">
                <h3>Singles & EPs</h3>
                <div class="list-group">
                    <a href="../../song/view_song/View Song.html" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-6">
                                <img class="album-image" src="../../assets/album-covers/theMantra.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <h4>The Mantra</h4>
                                <small>2018</small>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="../../song/view_song/View Song.html" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-6">
                                <img class="album-image" src="../../assets/album-covers/kingsDead.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <h4>Kings Dead.</h4>
                                <small>2018</small>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="../../song/view_song/View Song.html" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-6">
                                <img class="album-image" src="../../assets/album-covers/allthestars.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <h4>All The Stars (with SZA)</h4>
                                <small>2015</small>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="view-all">
                            <h3>View All</h3>
                        </div>
                    </a>
                </div>
            </div> *} 
        </div> 
    </div>
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