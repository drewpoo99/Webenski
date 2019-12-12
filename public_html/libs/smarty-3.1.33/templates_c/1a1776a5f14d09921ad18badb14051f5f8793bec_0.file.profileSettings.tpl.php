<?php
/* Smarty version 3.1.33, created on 2019-12-05 13:57:52
  from '/var/www/public_html/template/profileSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de95330bd43e5_02086189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a1776a5f14d09921ad18badb14051f5f8793bec' => 
    array (
      0 => '/var/www/public_html/template/profileSettings.tpl',
      1 => 1573677093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de95330bd43e5_02086189 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Profile Settings Page
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
    <link rel="stylesheet" href="settings.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Webenski</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Discover
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Artists</a>
                        <a class="dropdown-item" href="#">Albums</a>
                        <a class="dropdown-item" href="#">Songs</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Playlists</a>

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
    <div class="container-fluid">
        <div class="row">
            <div class="avatar">
                <img src="../assets/man.png">
                <a href="../passwordManagement/changePass.html">Change Password</a>
                <p>*This form will only work if all of the fields are filled in* </p>
            </div>
        </div>
        <form class="settings-form" action="settings.php" method="POST">
            <div class="form-group row">
                <div class="col-8">
                    <label for="first_name">First Name</label>
                    <input id="first_name" name="first_name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" name="last_name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                        <label for="email">Email</label>
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Boostrap -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
