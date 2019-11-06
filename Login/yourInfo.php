<?php 
include("inc/loggedinheader.php");
session_start();
if($_SESSION['loggedIn'] != "true"){
    header('Location: index.php');
}else{
echo "First Name:<br> {$_SESSION['u_first']} <br> <br>";
echo "Second Name:<br> {$_SESSION['u_last']} <br> <br>";
echo "Username:<br> {$_SESSION['u_uid']} <br> <br>";
}
?>