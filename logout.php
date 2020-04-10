<?php 
    session_start();
    
    $username = $_SESSION['username'];
    $currentUser = $username . ".json";
    $userString = file_get_contents("db/users/".$currentUser);
    $userObject =  json_decode($userString);

        $userObject->logindate = date("y/m/d h:i:s");

        unlink("db/users/".$currentUser);

    file_put_contents("db/users/". $username . "json", json_decode($userObject));

    session_unset();
    session_destroy();

    header("Location: login.php");
?>