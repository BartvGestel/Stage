<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- custom CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <title>Login and Register</title>
</head>
<header>
    <nav id="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>    
            <li><a href="loginPage.php">Login</a></li>
            <li><a href="signupPage.php">Sign up</a></li>
            <li><a href="setBackground.php">Set Background</a></li>
        </ul>
    </nav>
</header>
<?php include_once 'inc/databaseconn.php';
$sql="SELECT count(*) as total from game_backgrounds";
$result = mysqli_query($conn, $sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach($rows as $key => $value){
    $backgroundnumber = $value["total"];
}

$sqlbckgrnd = "SELECT background_filepath FROM  game_backgrounds WHERE background_id=" . rand(1, $backgroundnumber);
        $resultbckgrnd = mysqli_query($conn, $sqlbckgrnd);
        $rowsbckgrnd = $resultbckgrnd->fetch_all(MYSQLI_ASSOC);
        foreach($rowsbckgrnd as $key => $background){
            $backgroundpath = $background["background_filepath"];
        }
?>

<script type="text/javascript">
        document.body.style.backgroundImage = "url('<?php echo $backgroundpath ?>')"; 
    </script>