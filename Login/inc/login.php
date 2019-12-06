<?php

session_start();

if(isset($_POST['submit'])){
    include_once 'databaseconn.php';

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if(empty($uid) || empty($pwd)){
        header('Location: ../loginPage.php?login=empty');
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE userUid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck<1){
            header('Location: ../loginPage.php?login=invalid');
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($pwd, $row['userPwd']);
                if($hashedPwdCheck == false){
                    header('Location: ../loginPage.php?login=invalid');
                    exit();
                }elseif($hashedPwdCheck == true){
                    $_SESSION['u_id'] = $row['userId'];
                    $_SESSION['u_first'] = $row['userFirst'];
                    $_SESSION['u_last'] = $row['userLast'];
                    $_SESSION['u_uid'] = $row['userUid'];
                    $_SESSION['loggedIn'] = "true";
                    header('Location: ../../stage-code/index.php');
                    exit();
                }
            }
        }
    }
}else{
    header('Location: ../login.php');
    exit();
}