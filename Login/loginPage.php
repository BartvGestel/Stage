<?php 
include('inc/header.php');
?>

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
        Username: <br> <input name="uid" type="text"> </br>
        Password: <br> <input name="pwd" type="password"> </br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>