<?php
/* Smarty version 3.1.33, created on 2019-12-12 13:17:12
  from '/var/www/public_html/template/View Song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2842846b945_11881141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68299231259b979e2476b17a6db80b0c0b581bb8' => 
    array (
      0 => '/var/www/public_html/template/View Song.tpl',
      1 => 1576172964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2842846b945_11881141 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
    <link rel="stylesheet" href= View%20Song.css>
    <title>Song View</title>
</head>
<body>
<!-- Nav Bar -->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src= "WebenskiLogo.png" width="100" height="100" alt="">
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
                            <a class="dropdown-item" href="../album/albumList.php">Albums</a>
                            <a class="dropdown-item" href="../song/view_song/Index.php">Songs</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                            <a class="dropdown-item" href="../playlist/view_playlist/index.php">Playlists</a>

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

<!-- View Song -->
        <div class="container-fluid">

            <h4><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Playlist_Name']->value, 'playlist', false, 'PlaylistName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PlaylistName']->value => $_smarty_tpl->tpl_vars['playlist']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['playlist']->value;?>
</li> </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h4>

            <h6>Added by <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['User_Name']->value, 'user', false, 'Username');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Username']->value => $_smarty_tpl->tpl_vars['user']->value) {
?></h6>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <h5> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artist_ID']->value, 'id', false, 'aristid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['aristid']->value => $_smarty_tpl->tpl_vars['id']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['id']->value;?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h5>

           <h3><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Song_Name']->value, 'song', false, 'SongName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SongName']->value => $_smarty_tpl->tpl_vars['song']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['song']->value;?>

               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           </h3>

            <img class="WB" src="../../assets/WB Logo.png">

            <p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Album_Name']->value, 'album', false, 'AlbumName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['AlbumName']->value => $_smarty_tpl->tpl_vars['album']->value) {
?>
                     <?php echo $_smarty_tpl->tpl_vars['album']->value;?>

            </p>   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            <p class="sl"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Song_Time']->value, 'time', false, 'SongTime');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SongTime']->value => $_smarty_tpl->tpl_vars['time']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </p>

            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php }
}
