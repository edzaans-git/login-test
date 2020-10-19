<?php
//Start session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Login page</title>

</head>
<body>
    <!-- Navigation start-->
    <nav>
        <ul class="flex-container">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="members.php">Members page</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="logout.php">Log out</a>
            </li>
        </ul>
    </nav>
    <!-- Navigation end-->

    <!-- Main start-->
    <?php
        if(isset($_SESSION['isLoggedIn'])) {
            //If usr logged in,dont show the form
            echo "You are already logged in!!!";
        }else {
            //Using HEREDOC create the form
$theForm = <<<THEFORM
        <div class="main">
            <h2>Welcome to FishBook</h2>
            <h3>Enter your username and password to log in!</h3>
    
            
                <form action="login-response.php" method="POST">
                    <label for="username">
                        <input type="text" name="username" id="uname" placeholder="Your username" required>
                    </label>
                    <label for="password">
                        <input type="password" name="password" id="psw" placeholder="Your password">
                    </label>
                        <input type="submit" value="Submit">
                </form>
        </div>
THEFORM; //THEFORM has to be at veru start, no spaces
echo $theForm;
        }
    ?>
<!-- Main end-->

<?php

//Using querystring to send messgaes back to login page

$isBlock = $_GET['isBlock'];
$badUserCredentials = $_GET['badUserCredentials'];

if(isset($isBlock)) {
    echo "Ah ah aahhhhh, you need to log in!";
    echo "<script>document.getElementById('uname').focus();</script>";
}else if($badUserCredentials) {
    echo "Your username OR password is wrong";
    echo "<script>document.getElementById('uname').focus();</script>";
}

?>

</div>
</body>
</html>