<?php
//Start the session
session_start();

// Check to see if all information was sentered correct

$username = $_POST['username'];

if(trim($username) == "Edgars") {

    $_SESSION['isLoggedIn'] = true;
    header('Location: members.php');
}else {
    header('Location: index.php?badUserCredentials=true');//Set credentials to true to use later
}

?>