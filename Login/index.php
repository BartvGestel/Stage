<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register and Logint</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<?php
if(isset($_SESSION['u_id'])){
    include("inc/loggedinheader.php");
    echo "Welcome back, {$_SESSION['u_first']}";
        ?>
        <form action="inc/logout.php" method="POST">
        <input type="submit" name="submit" value="Logout">
        </form>
        <?php
    } else{
        include('inc/header.php');
        echo"You are not logged in";
    }?>
</body>
</html>







