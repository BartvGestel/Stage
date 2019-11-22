<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../stage-code/images/icon.ico">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- KeyBoard CSS -->
    <link rel="stylesheet" href="../keyboard/inc/css/jkeyboard.css">
    <!-- The Keyboard -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../keyboard/inc/js/jkeyboard.js"></script>    

<body>
    <form action="inc/signup.php" method="POST" id="container">
    <div id="error">
    <?php
                $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullURL, "signup=empty") == true) {
                    echo "<p>You did not fill in all fields!</p>";
                }

                if(strpos($fullURL, "signup=invalid") == true) {
                    echo "<p>Don't use any special kind of characters!</p>";
                }

                if(strpos($fullURL, "signup=taken") == true) {
                    echo "<p>Your Username is already taken!</p>";
                }

                if(strpos($fullURL, "signup=succesfull") == true) {
                    echo "<p>You have succesfully registered!</p>";
                }
                ?>
        </div>
        <div  class="container Register-Container">
        <H2 class="Login-Title"><i class="fas fa-sign-in-alt"></i> Register</H2>
        <form class="Login-Form" action="Inc/RegisterLoad.php" method="POST">
            <div class="form-group">
                <label class="Label">First Name</label>
                <input type="text" class="form-control text3" name="first"  placeholder="Enter First Name">
                <div class="keyboard2"></div>
                <script>
                    $('.keyboard2').jkeyboard({
                        layout: "english_capital",
                        input: $('.text3'),
                        customLayouts: {
                            selectable: ["english_capital"],
                            english_capital: [
                                ['Ċ', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'Ġ',],
                                ['Ħ', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Ż',],
                                ['Z', 'X', 'C', 'V', 'B', 'N', 'M', '\'', '.'],
                                ['space', '-', 'backspace']
                                ],
                        }
                    });
                </script>
            </div>
            <div class="form-group">
                <label class="Label">Last Name</label>
                <input type="text" class="form-control text4" name="last"  placeholder="Enter Last Name">
                <div class="keyboard3"></div>
                <script>
                    $('.keyboard3').jkeyboard({
                        layout: "english_capital",
                        input: $('.text4'),
                        customLayouts: {
                            selectable: ["english_capital"],
                            english_capital: [
                                ['Ċ', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'Ġ',],
                                ['Ħ', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Ż',],
                                ['Z', 'X', 'C', 'V', 'B', 'N', 'M', '\'', '.'],
                                ['space', '-', 'backspace']
                                ],
                        }
                    });
                </script>
            </div>
            <div class="form-group">
                <label class="Label">Username</label>
                <input type="text" class="form-control text5" name="uid"  placeholder="Enter Username">
                <div class="keyboard4"></div>
                <script>
                    $('.keyboard4').jkeyboard({
                        layout: "english_capital",
                        input: $('.form-control text5'),
                        customLayouts: {
                            selectable: ["english_capital"],
                            english_capital: [
                                ['Ċ', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'Ġ',],
                                ['Ħ', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Ż',],
                                ['Z', 'X', 'C', 'V', 'B', 'N', 'M', '\'', '.'],
                                ['space', '-', 'backspace']
                                ],
                        }
                    });
                </script>
            </div>
            <div class="form-group">
                <label class="Label">Password</label>
                <input type="password" class="form-control text6" name="pwd"  placeholder="Enter Password">
                <div class="keyboard5"></div>
                <script>
                    $('.keyboard5').jkeyboard({
                        layout: "english_capital",
                        input: $('.form-control text6'),
                        customLayouts: {
                            selectable: ["english_capital"],
                            english_capital: [
                                ['Ċ', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'Ġ',],
                                ['Ħ', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Ż',],
                                ['Z', 'X', 'C', 'V', 'B', 'N', 'M', '\'', '.'],
                                ['space', '-', 'backspace']
                                ],
                        }
                    });
                </script>
            </div>
            <!-- submit button submits data to registerLoad.php, Login button goes to Login.php -->
            <div class="row justify-content-around">
                <a class="btn btn-light Register-Button" href="loginPage.php"><i class="fas fa-sign-in-alt"></i>Login</a>
                <button type="submit" class="btn btn-light Register-Button" name="submit" value="Register"><i class="far fa-user"></i> Submit</button>
            </div>
            
        </form>
    </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>