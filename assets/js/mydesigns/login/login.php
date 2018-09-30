<!DOCTYPE html>
<html>
<head>

    <script src="js/login.js"></script>
    <title></title>
    
</head>
<body>

<?php

function login()
{
    if ($GLOBALS['my_post']['key'] != "_loginPass") {
        // echo "fail";
        header("index.php");
        exit();
    }

    $mysqli = new mysqli('localhost','root','','sms_db');

    $email = $mysqli->escape_string($_POST['username']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if (!$result) {
        echo '<script>loginFailed();</script>';
    }
    else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}
}
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
// $email = $mysqli->escape_string($_POST['username']);
// $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

// if (!$result) {
    // if ( $result->num_rows == 0 ) { // User doesn't exist
        // $_SESSION['message'] = "User with that email doesn't exist!";
        // header("location: error.php");
    // }
//     echo '<script>loginFailed();</script>';

// }
    
// else { // User exists
//     $user = $result->fetch_assoc();

//     if ( password_verify($_POST['password'], $user['password']) ) {
        
//         $_SESSION['email'] = $user['email'];
//         $_SESSION['first_name'] = $user['first_name'];
//         $_SESSION['last_name'] = $user['last_name'];
//         $_SESSION['active'] = $user['active'];
        
//         // This is how we'll know the user is logged in
//         $_SESSION['logged_in'] = true;

//         header("location: profile.php");
//     }
//     else {
//         $_SESSION['message'] = "You have entered wrong password, try again!";
//         header("location: error.php");
//     }
// }

?>

<!-- <script src="js/login.js"></script> -->

</body>
</html>
