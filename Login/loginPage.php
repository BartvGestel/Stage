<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../stage-code/images/icon.ico">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- KeyBoard CSS -->
    <link rel="stylesheet" href="../keyboard/inc/css/jkeyboard.css">
<body>
<div id="error">
<?php
$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullURL, "login=empty") == true) {
    echo "<p>You haven't filled in al the fields</p>";
}

if(strpos($fullURL, "login=invalid") == true) {
    echo "<p>The username or password is invalid</p>";
}
?>
</div>   
<form action="inc/login.php" method="POST" id="container">
<div  class="container Login-Container">
        <div class="row justify-content-center align-items-center Login-Row">
            <div class="col-md-8">
                <H2 class="Login-Title"><i class="fas fa-sign-in-alt"></i> Login</H2>
                <form class="Login-Form" action="Inc/LoginLoad.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control text1" name="uid" required="required" placeholder="Username">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control text2" name="pwd" required="required" placeholder="Password">
                    <div class="row justify-content-around">
                        <a class="btn btn-light" href="signupPage.php"><i class="fas fa-user-plus"></i> Create Account</a>
                        <button type="submit" class="btn btn-light" type="submit" name="submit" value="Login"><i class="far fa-user"></i> Submit</button>
                    </div>            
                </form>
            </div>
        </div>
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>