<?php
echo $sqlword;
if(isset($_POST['submit'])){
        $answer = $_POST['answer'];
        if($answer == $word){
            echo "<div class=rightwrong>";
            echo "<img id='img1' src='images/starRight.png'>";
            echo " Correct"; 
            echo "</div>";
            echo "
                <script type=\"text/javascript\">
                document.getElementById('score1').innerHTML = score1;
                score1++;
                </script>
                ";
        }else{
            echo "<div class=rightwrong>";
            echo "<img id='img2' src='images/starWrong.png'>";
            echo "incorrect";
            echo "</div>";
            echo "
                <script type=\"text/javascript\">
                document.getElementById('score2's).innerHTML = score2;
                score2++;
                </script>
                ";
        }
    }