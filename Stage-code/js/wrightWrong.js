var purpleBlock = document.getElementById("red_block");
var purpleBlock = document.getElementById("green_block");
var numberOne;
var numberTwo;
var correctOne = 1;
var clickCounter = 0;

function wrightwrong(clickedButton)
{
    clickCounter++;

    numbers.innerHTML += clickedButton.value;

    if (clickCounter == 1) 
    {
       numberOne = clickedButton.value; 
		if(numberOne == correctOne){	
            var blink = setInterval(function() {

                intervalTimer++;
            
                if (green_block.style.visibility == 'hidden') {
                    green_block.style.visibility = 'visible';
                }else {
                    green_block.style.visibility = 'hidden';
                }
            
                if (intervalTimer == 10) {
                    clearInterval(blink);
                    intervalTimer = 0;
                }
            }, 500);	
       
        }   
		else{
            var blink = setInterval(function() {

                intervalTimerWrong++;
            
                if (red_block.style.visibility == 'hidden') {
                    red_block.style.visibility = 'visible';
                }else {
                    red_block.style.visibility = 'hidden';
                }
            
                if (intervalTimerWrong == 10) {
                    clearInterval(blink);
                    intervalTimerWrong = 0;
                }
            }, 500);
        }
    }
}