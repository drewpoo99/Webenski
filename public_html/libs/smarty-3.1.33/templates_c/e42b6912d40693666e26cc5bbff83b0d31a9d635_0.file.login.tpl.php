<?php
/* Smarty version 3.1.33, created on 2019-12-11 21:09:19
  from '/var/www/public_html/template/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1a14f23c1e8_66785287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e42b6912d40693666e26cc5bbff83b0d31a9d635' => 
    array (
      0 => '/var/www/public_html/template/login.tpl',
      1 => 1576107870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1a14f23c1e8_66785287 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    
    <!-- Bootstrap Overriding Styles -->
    <link rel="stylesheet" href="../globalstyles.css">

    <!-- Login Styles -->
    <link rel="stylesheet" href="./login/login.css">
    
</head>
<body>
    <div class="container-fluid form-container">
        <div class="row">
            <div class="col-8" id="login-form">
                <h1>Sign In To Your Account</h1>
                <form class="login" action="index.php" method="POST">
                    <div class="form-group row">
                        <!-- <label for="email" class="col-4 col-form-label">email</label>  -->
                        <div class="col-6 form-input">
                        <div class="input-group">
                            <input id="email" name="email" type="text" class="form-control" 
                            placeholder="Email"
                            required="required">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="password" class="col-4 col-form-label">Password</label>  -->
                        <div class="col-6 form-input">
                        <div class="input-group"> 
                            <input id="password" name="password" type="text" required="required" 
                            placeholder="Password" 
                            class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="from-group row">
                        <div class="col-6 form-input">
                            <a class="recovery" href="../passwordManagement/forgotPass.html">Recover Account</a>
                        </div>   
                    </div> 
                    <?php if ($_smarty_tpl->tpl_vars['status']->value == "1") {?>
                    <div class="alert alert-warning" role="alert">
                        Email Does Not Exist
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['status']->value == "2") {?>
                    <div class="alert alert-warning" role="alert">
                        Wrong Email Or Password
                    </div>
                    <?php }?>
                    <div class="form-group row">
                        <div class="col-6 form-input">
                        <button name="submit" type="submit" 
                        class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form> 
            </div>
            <div class="col-4" id="login-sidebar">
                <h1 class="sidebar-heading">New Here?</h1>
                <h3 class="sidebar-tagline">Enter your details and join us in the new way to enjoy music!</h3>
                <button name="sign-up" type="Sign-up" class="btn btn-outline-light btn-lg" 
                id="sUpBtn" onclick="location.href='login/register.php'">
                    Sign Up
                </button>
            </div>
        </div>
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
