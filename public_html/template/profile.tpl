<!-- Profile Page
    *author: Drew Weaver
    *last updated: 9/25/2019

    *modified by:
    *on:
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Bootstrap Overriding Styles -->
    <link rel="stylesheet" href="../globalstyles.css">

    <!-- File Specific Styles -->
    <link rel="stylesheet" href="../profile/profile.css">
</head>

<body>
   <!-- Nav Bar -->
   <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="../assets/WebenskiLogo.png" width="100" height="100" alt="">
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
                            <a class="dropdown-item" href="../album/album_list/album_list.html">Albums</a>
                            <a class="dropdown-item" href="../song/song_list/song_list.html">Songs</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../playlist/playlist_list/Playlist list.html">Playlists</a>

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

        <!-- Identity Section -->
        <header class="row">
            <div class="col-12 identity">
                <div class="row">
                    <div class="col-3 avatar">
                        <img src="../assets/man.png">
                    </div>
                    <div class="col-3 nameplate">
                        <h1>{$user_username}</h1>
                        <p>{$user_full_name}</p>
                        <p>{$user_email}</p>
                    </div>
                    <div class="col-3 settings">
                        <p><a href="../profile/settings.php">Settings</a></p>
                        <p><a href="../login/login.html">Log Out</a></p>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Main Section -->
    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 id="libraryHeading">My Library (Coming Soon)</h1>
            </div>
            <!-- Library Section -->
            {* <section class='library col-12'>
                <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingZero">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                                        My Artists
                                    </button>
                                    <div class="add">
                                            <img src="../assets/plus.png">
                                    </div>
                                </h2>
                                
                            </div>
                            <div id="collapseZero" class="collapse" aria-labelledby="headingZero"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="artistinfo">
                                            <div class="artistimg">
                                                <img src="../assets/artists/kendrick.jpg">
                                            </div>
                                            <div class="artistname">
                                                <h4><a href="../artists/artist_view/artist.html">Kendrick Lamar</a></h4>
                                            </div>
                                        </div>
                                        <div class="artistinfo">
                                            <div class="artistimg">
                                                <img src="../assets/artists/blink182.jpg">
                                            </div>
                                            <div class="artistname">
                                                <h4><a href="#">Blink 182</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    My Playlists
                                </button>
                                <div class="add">
                                    <img src="../assets/plus.png">
                                </div>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                               <div class="row">
                                   <div class="playlistinfo">
                                       <div class="playlistimg">
                                           <img src="../assets/hype.jpg">
                                       </div>
                                       <div class="playlistname">
                                           <h4><a href="../playlist/view_playlist/view_playlist.html">Pump Up Jams</a></h4>
                                       </div>
                                   </div>
                                   <div class="playlistinfo">
                                       <div class="playlistimg">
                                           <img src="../assets/worhsip.jpg">
                                       </div>
                                       <div class="playlistname">
                                           <h4><a href="../playlist/view_playlist/view_playlist.html">Worship Tunes</a></h4>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    My Albums
                                </button>
                                <div class="add">
                                    <img src="../assets/plus.png">
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="albuminfo">
                                        <div class="albumcover">
                                            <img src="../assets/album-covers/postmalone.jpg">
                                        </div>
                                        <div class="albumname">
                                            <h4><a href="../album/view_album/View Album.html">Hollywood's Bleeding</a></h4>
                                        </div>
                                        <div class="albumartist">
                                            <h6><a href="#">Post Malone</a></h6>
                                        </div>
                                    </div>
                                    <div class="albuminfo">
                                        <div class="albumcover">
                                            <img src="../assets/album-covers/tylerthecreator.jpg">
                                        </div>
                                        <div class="albumname">
                                            <h4><a href="../album/view_album/View Album.html">Flower Boy</a></h4>
                                        </div>
                                        <div class="albumartist">
                                            <h6><a href="#">Tyler, The Creator</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    My Songs
                                </button>
                                <div class="add">
                                    <img src="../assets/plus.png">
                                </div>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="songinfo">
                                        <div class="songpicture">
                                            <img src="../assets/album-covers/hillsong.jpg">
                                        </div>
                                        <div class="songtitle">
                                            <h4><a href="../song/view_song/View Song.html">Who You Say I Am</a></h4>
                                        </div>
                                        <div class="songartist">
                                            <h6><a href="#">Hillsong United</a></h6>
                                        </div>
                                        <div class="songalbum">
                                            <h6><a href="../album/view_album/View Album.html">There Is More (Live)</a></h6>
                                        </div>
                                    </div>
                                    <div class="songinfo">
                                        <div class="songpicture">
                                            <img src="../assets/album-covers/hillsong2.jpg">
                                        </div>
                                        <div class="songtitle">
                                            <h4><a href="../song/view_song/View Song.html">So Will I (100 Billion X)</a></h4>
                                        </div>
                                        <div class="songartist">
                                            <h6><a href="#">Hillsong United</a></h6>
                                        </div>
                                        <div class="songalbum">
                                            <h6><a href="../album/view_album/View Album.html">Wonder</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> *}
        </div>
    </main>




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