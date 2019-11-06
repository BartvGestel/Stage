
<?php include("inc/header.php") ?>
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
        *Username: <br> <input name="uid" align="right" class="input-box" type="text"> <br>
        *First name: <br> <input name="first" align="right" class="input-box" type="text"> </br>
        *Second name: <br> <input name="last" align="right" class="input-box" type="text"> </br>
        *Password: <br> <input name="pwd" align="right" class="input-box" type="password"> </br>
        <input type="submit" name="submit" value="Register">
        <p>All items with a star are mandatory to fill in</p>
    </form>

</body>
</html>