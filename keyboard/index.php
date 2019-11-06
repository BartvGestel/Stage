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

        #search_field{

            display: block;

            margin: 0 auto;

            padding: 5px 10px;

            font-size: 28px; 

            width: 50%;

        }

            

    </style>

</head>

<body>

    

    <input type="text" id="search_field">

    <div id="keyboard"></div>

    



    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <script src="../inc/js/jkeyboard.js"></script>

    <script>

        $('#keyboard').jkeyboard({

            layout: "maltese",

            input: $('#search_field'),

            customLayouts: {

                selectable: ["maltese"],

                english_capital: [

                    ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P',],

                    ['A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L',],

                    ['Z', 'X', 'C', 'V', 'B', 'N', 'M', '\'', '.'],

                    ['space', '-', 'backspace']

                    ],

            }

        });

    </script>

</body>

</html>