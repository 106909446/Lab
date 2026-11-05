<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $token = $_POST['token'];

    if ($username == 'admin' && $password =='12345') {
        $_SESSION['user'] = $username;
        $_SESSION['token'] = $token;
        header('Location:welcome.php');
    } else {
        echo "Invalid Login. <a = href='login.html'>Try Again</a>";
    }

?>