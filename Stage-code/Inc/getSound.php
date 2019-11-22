<?php
include("Session.php");
if($_SESSION['loggedIn'] == true)
{
    //including the files
     include("header.php");
include("functions.php");
include("../keyboard/keyboard/index.php");
//getting the getSound function
$sql="SELECT count(*) as total from sound";
$result = mysqli_query($conn, $sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach($rows as $key => $value){
    $wordnumber = $value["total"];
}

$sqlword = "SELECT Word, SoundMrut FROM sound WHERE typeId=" . rand(1, $wordnumber);
$resultword = mysqli_query($conn, $sqlword);
$rowsword = $resultword->fetch_all(MYSQLI_ASSOC);
foreach($rowsword as $keyword => $worddata){
    $word = $worddata['Word'];
    $audio = $worddata['SoundMrut'];
}
?>

<?php
      
    ?>    
    <div class="card" style="border: 3px solid black;">
        <div class="alert " role="alert">WordGame</div>
            <div class="card-body"> 
                <div class="cardfade">
            <!-- making use of a onclick image so when you press on it there will be some sound playing
            getting only the soundMrut from the DataBase -->     
                <div class="start"><img src="images/play.png" onclick="fadeout()"></div> 
            <h5 class="card-text">You need to have sound for this game!</h5></div>
            <div id="number3" class="number" style="display: none">3</div>
            <div id="number2" class="number" style="display: none">2</div>
            <div id="number1" class="number" style="display: none">1</div>
            <a class="playsound"><img src="images/sound.png" onclick="playAudio(<?php echo $audio?>)" class="card-img-top" alt="playImage"></a>
            <div class="press">Press Button For Sound And Play The Game!</div>
<!-- <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
  <input type="text" class="form-control" placeholder="Correct Word" aria-label="inputgroup" aria-describedby="addon-wrapping">
    </div>
</div> -->
<form method="POST">
<input type="text" class="text3" name="answer">
<input class="btn btn-light Check" type="submit" value="Check Word" name="submit">
</form>
<div id="keyboard"></div>
     </div>
    </div>
    <div class="timer">
    <h1 id="countTime"></h1>
    </div>
    <?php
    

    if(isset($_POST['submit'])){
        $answer = $_POST['answer'];
        if($answer == $word){
            echo "<div class=rightwrong>";
            echo "<img id='img1' src='images/starRight.png'>";
            echo " Correct";
            echo "</div>";
        }else{
            echo "<div class=rightwrong>";
            echo "<img id='img2' src='images/starWrong.png'>";
            echo "incorrect";
            echo "</div>";
        }
    }
?>
<!-- 2 buttons that show a image when it's right or wrong -->
<!-- <input id="buttons" type="submit" name="button" value="right" onclick="right();"/>
<input id="button" type="submit" name="button" value="wrong" onclick="wrong();"/> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WordGame</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- KeyBoard CSS -->
    <link rel="stylesheet" href="../keyboard/inc/css/jkeyboard.css">
    <!-- The Keyboard -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../keyboard/inc/js/jkeyboard.js"></script>    
</head>
<body>
<script>
//a function to play the music
function playAudio(url) {
  var a = new Audio(url);
  a.play();
}
    $('#keyboard').jkeyboard({
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

    function right()
	{
		var image = document.getElementById("img1");
		if (image) {
		image.style.display = 'block';
		}
	}
	function wrong()
	{
		var images = document.getElementById("img2");
		if (images) {
		images.style.display = 'block';
		}
    }


function fadeout()
{
$(".start").click(function(){
    $( ".cardfade" ).fadeOut( "slow", function()
    {
        $( "#number3" ).fadeIn( "slow", function() 
        {
            $( "#number3" ).fadeOut( "slow", function() 
            {
                $( "#number2" ).fadeIn( "slow", function() 
                {
                    $( "#number2" ).fadeOut( "slow", function() 
                    {
                        $( "#number1" ).fadeIn( "slow", function() 
                        {
                            $( "#number1" ).fadeOut( "slow", function() 
                            {
                                $( ".playsound" ).fadeIn("slow", function()
                                {
                                    $( ".press" ).fadeIn( "slow")
                                    $(".playsound").click(function()
                                    {
                                        $( ".playsound" ).fadeOut( "slow")
                                        $( ".press" ).fadeOut( "slow")
                                            $( ".text3" ).fadeIn( "slow", function()
                                            {
                                                $( "#keyboard" ).fadeIn( "slow")
                                                $( ".Check" ).fadeIn( "slow")
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    });
}

var countdown = 30 * 60 * 1000;
var timerId = setInterval(function(){
  countdown -= 1000;
  var min = Math.floor(countdown / (60 * 1000));
  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);
  if (countdown <= 0) {
     alert("Game Over!");
     clearInterval(timerId);
  } else {
     $("#countTime").html(min + " : " + sec);
  }
}, 1000);
</script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>"../keyboard/inc/js/jkeyboard.js"</script>
<!-- loading the boodstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else
{
    header("location: ../demo-frontend/demofrontend.php");
}
?>