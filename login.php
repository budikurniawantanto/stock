<?php
    if(empty($_SESSION)) session_start();

    //echo "<h3>Username : ". $_POST['username'].".<br>";
    //echo " Password : ". $_POST['password']. "<br></h3>";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    if($username == "hartono" && $password == "1234"){
        header("Location: /home1.php/");
        exit;
    }
    else{
        header("Location: /login_failed.php/");
        exit;
    }
?>