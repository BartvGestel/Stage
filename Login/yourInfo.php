<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../stage-code/images/icon.ico">
    <title>WordGame</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php 
session_start();
if($_SESSION['loggedIn'] != "true"){
    header('Location: index.php');
}else{
echo " <div class='yourinfo'>"; 
    echo " <div class='firstname'>"; 
        echo "First Name:<br> {$_SESSION['u_first']} <br> <br>";"</div>";
    echo "</div>";
    echo " <div class='lastname'>"; 
        echo "Second Name:<br> {$_SESSION['u_last']} <br> <br>";
    echo "</div>";
    echo " <div class='username'>"; 
        echo "Username:<br> {$_SESSION['u_uid']} <br> <br>";
    echo "</div>";
    echo " <div class='back'>";
        echo "<a href='../stage-code/index.php' class='btn btn-info btn-lg active' role='button' aria-pressed='true'>Go Back</a>";
    echo "</div>";
echo "</div>";
}
?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
</html>