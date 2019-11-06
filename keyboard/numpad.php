
<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Keyboard Example</title>

    <link rel="stylesheet" href="../inc/css/jkeyboard.css">

    <style>

        body{

            background: #144766

        }

        .input_box {

            display: inline-block;

            margin: 0 auto;

            padding: 5px 10px;

            font-size: 28px; 

            width: 25%;

        }

        .input_box_container {

            text-align: center;

        }

            

    </style>

</head>

<body>

    

    <div class="input_box_container">

        <input type="text" class="input_box" id="input_field_1">

        <input type="text" class="input_box" id="input_field_2">

    </div>

    <div id="keyboard"></div>

    



    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <script src="../inc/js/jkeyboard.js"></script>

    <script>

        $('#keyboard').jkeyboard({

          layout: "numbers_only",

          input: $('#input_field_1')

        });





        $(".input_box").focus(function() {

            $('#keyboard').jkeyboard("setInput", this);

        });





    </script>

</body>

</html>