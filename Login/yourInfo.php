<?php 
include("../stage-code/Inc/header.php");
session_start();
if($_SESSION['loggedIn'] != "true"){
    header('Location: index.php');
}else{
echo "First Name:<br> {$_SESSION['u_first']} <br> <br>";
echo "Second Name:<br> {$_SESSION['u_last']} <br> <br>";
echo "Username:<br> {$_SESSION['u_uid']} <br> <br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="WordGame">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>WordGame Maik Rutten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<a href="http://localhost/gits/Stage/stage-code/index.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Go Back</a>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>