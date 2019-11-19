<?php
//including the functions
include("inc/functions.php");
//getting the getSound function
$Sound = getSound();
?>
<html>
	<head>
		<!-- Set title from browser -->
		<title>POC - WordGame</title>

		<!-- Load bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
		
		<!-- Select2 -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

		<!-- Our css  -->
		<link rel="stylesheet" href="../assets/css/custom.css">

		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
	</head>
	<body>
	<?php
    foreach($Sound as $k => $Sounds)
    {   
    ?>    
    <div class="card">
        <div class="alert alert-primary" role="alert">WordGame</div>
            <div class="card-body">
		<div class="bg"></div>

		<div class="container-fluid" style="position: relative;">
			<div class="bg-transparent">
				<div id="StartScreen">
					<div class="center" style="min-height: 120px;">
						<div id="selectBox">
							<select class="select-list" name="state" style="max-width: 600px; display: block;"></select>
						</div>
						<div class="startText">Click to start!</div>						
            <!-- making use of a onclick image so when you press on it there will be some sound playing
            getting only the soundMrut from the DataBase -->
            <a class="btn"><img src="images/play.png" onclick="javascript:playAudio(<?php echo $Sounds['soundMrut']?>)" class="card-img-top" alt="playImage"></a>
            <h5 class="card-text">You need to have sound for this game!</h5>
            <div id="number3" class="number" style="display: none">3</div>
			<div id="number2" class="number" style="display: none">2</div>
			<div id="number1" class="number" style="display: none">1</div>
     </div>
    <?php
    }
?>
		</div>
			</div>

		<script>

		//a function to play the music
		function playAudio(url) {
		var a = new Audio(url);
		a.play();
		}
			function gotSession(sessionData) 
			{
                if (sessionData['data'].sessionid != null)
				{	
					// save sessionId
					sessionId = sessionData['data'].sessionid;

					$( ".startText" ).fadeOut("slow");	
					$( "#selectBox" ).fadeOut("slow");	
					$( ".pointer" ).fadeOut("slow");
					$( "#alertHolder" ).fadeOut("slow");
					$( ".play" ).fadeOut( "slow", function() 
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
											    // Animation complete.
											    $( "#StartScreen" ).fadeOut( "slow" , function(){
											    	$( "#WordScreen" ).fadeIn("slow");
											    	$( "#totalWords" ).fadeIn( "slow" );

											    	var audioElement = document.createElement('audio');
													audioElement.setAttribute('src', 'https://spelladmin.easypeasycoding.com/upload/' + words[pos]['id'] + '/' + words[pos]['audio']);

													audioElement.play();
													    
													audioElement.addEventListener('ended', function() {
													    $('.soundImg').css("display", "none");  
													    $( ".Keyboard" ).fadeIn( "slow" );
													    $( ".Word_Holder" ).fadeIn( "slow" );

													    keyboardEnabled = true;

													}, false);
											    });
											    
									  		});	
							  			});
							  		});	
					  			});
					  		});	
					  	});	
					});

				}
            }

			$(window).keydown(function(event) 
			{
				if (keyboardEnabled == true)
	            {


	            	if (event.which == 13 || event.which == 8) 
	            	{
	            		if (event.which == 13)
	            		{
	            			event.preventDefault();
					  		check();
	            		}

	            		if (event.which == 8)
	            		{
	            			event.preventDefault();
					  		backspace();
	            		}
					}
					else
					{
						add(event['originalEvent'].key);
					}
	            }
			});

		</script>

		<!-- Script bootstrap -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="./assets/js/bg_script.js"></script>
	</body>
</html>