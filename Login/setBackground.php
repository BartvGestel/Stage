<?php include("inc/header.php");

include_once 'inc/databaseconn.php';?>
<form action="inc/background.php" method="POST">
<?php
    $sql="SELECT background_keyword, background_id from game_backgrounds";
    $result = mysqli_query($conn, $sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $key => $background){
        $backgroundName = $background["background_keyword"];
        $backgroundId = $background["background_id"];
        echo $backgroundName;
        ?>
            <input type="radio" name="<?php echo $backgroundId; ?>"> <br>
        <?php
    }
?>
<input type="submit" value="submit">
</form>