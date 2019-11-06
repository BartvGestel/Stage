<?php

if (isset($_POST['submit'])) {
    include_once 'databaseconn.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if(empty($first) ||empty($last) ||empty($uid) ||empty($pwd)){
        header('Location: ../signupPage.php?signup=empty');
        exit();
    }else{
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            header('Location: ../signupPage.php?signup=invalid');
            exit();
        }else{
                $sql = "SELECT * FROM users WHERE userUid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    header('Location: ../signupPage.php?signup=taken');
                    exit();
                }else{
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (userFirst, userLast, userUid, userPwd)
                            VALUES('$first', '$last', '$uid', '$hashedPwd')";
                    mysqli_query($conn, $sql);
                    header('Location: ../signupPage.php?signup=succesfull');
                    exit();

                }
            }
        }
    }

