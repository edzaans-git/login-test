<?php
//Start the session
session_start();

//Check sesssion to see if they logged in
if(isset($_SESSION['isLoggedIn'])) {
    // do nothing, user is logged in
}else {
    header('Location: login.php?isBlock=true');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>You are viewing members page</h2>
    <div class="membersDiv"></div>
</body>
</html>