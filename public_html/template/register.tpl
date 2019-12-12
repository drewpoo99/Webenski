<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <!-- Bootstrap Overriding Styles -->
    <link rel="stylesheet" href="../globalstyles.css">

    <!-- Login Styles -->
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" id="signup-sidebar">
                <h1>Welcome Back!</h1>
                <h3>Sign in and hop back into the action!</h3>
                <button name="sign-up" type="Sign-up" class="btn btn-outline-light btn-lg" 
                id="sInBtn" onclick="location.href='../index.php'">
                    Sign In
                </button>
            </div>
            <div class="col-8" id="signup-form">
                <h1>Sign Up Here!</h1>
                <form class="signup" action="register.php" method="POST">
                    <div class="form-group row">
                        <!-- <label for="name" class="col-4 col-form-label">Name</label> -->
                        <div class="col-8 form-input">
                            <div class="input-group">
                                <input id="first_name" 
                                name="first_name" 
                                type="text" 
                                class="form-control" 
                                placeholder="First Name"
                                required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="name" class="col-4 col-form-label">Name</label> -->
                        <div class="col-8 form-input">
                            <div class="input-group">
                                <input id="last_name" 
                                name="last_name" 
                                type="text" 
                                class="form-control" 
                                placeholder="Last Name"
                                required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="username" class="col-4 col-form-label">Username</label> -->
                        <div class="col-8 form-input">
                            <div class="input-group">
                                <input id="username" 
                                name="username" 
                                type="text" 
                                class="form-control" 
                                placeholder="Username"
                                required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="email" class="col-4 col-form-label">Email</label> -->
                        <div class="col-8 form-input">
                            <div class="input-group">
                                <input id="email" 
                                name="email" 
                                type="text" 
                                class="form-control" 
                                placeholder="Email"
                                required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="password" class="col-4 col-form-label">Password</label> -->
                        <div class="col-8 form-input">
                            <div class="input-group">
                                <input id="password" 
                                name="password" 
                                type="text" 
                                class="form-control" 
                                placeholder="Password"
                                required="required">
                            </div>
                        </div>
                    </div>
                    {if $status eq "0"}
                    <div class="alert alert-success" role="alert">
                        Profile Created! <a href="../index.php"> Log In Here! </a>
                    </div>
                    {/if}
                    {if $status eq "1"}
                    <div class="alert alert-warning" role="alert">
                        Email Already Exists, Try Again
                    </div>
                    {/if}
                    <div class="form-group row">
                        <div class="col-8 form-input">
                            <button name="submit" type="submit" 
                            class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>