<?php

//Database connection
function db()
{
$host = "localhost";
$user = "root";
$pass = "";
$database = "stage";
//connection complete when al these things are correct
$conn = mysqli_connect($host, $user, $pass, $database);

return $conn;
}


function getSound($num = false)
{  
    //Database Connection
    $conn = db();

    // empty users array
    $sound = [];

    // db query
    $sql = "SELECT * FROM sound";

    // run quqery
    $result = mysqli_query($conn, $sql);

    // fetch data and put in $sound
    while($row = mysqli_fetch_assoc($result))
    {
        $sound[] = $row;
    }

    // return array sound
    return $sound;
    
}

// function progress($pro = false)
// {
//     //Database Connection
//     $conn = db();

//     $userId = $_POST['userId'];
//     $wordId = $_POST['wordId'];
     
//     $selectuserid = "SELECT * FROM progress WHERE userId='"$userId"'";
//     if ('".$selectuserid."' > 0){
//         $sqlprogress = "UPDATE progress SET (userId,wordId) WHERE wordId='".$wordId."';
//             if ('".$sqlprogress."' == 0){
//                 INSERT INTO progress VALUES ('".$userId."','".$wordId."')";                              
//     }
// }
                           
               
//     $result = mysqli_query($conn, $sqlprogress);
//     if (!result) echo "error";
//     else echo "sent";
// }
?>
