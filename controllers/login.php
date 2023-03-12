<?php

// $heading = "Login form";
include "view/login.view.php";
//store user
function validateString($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function getLoginPost () {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = [];
        $email = $password = "";
        $email = validateString($_POST["login-email"]);
        $password = validateString($_POST["login-password"]);
    
        //check if empty
        if (!empty($email) && !empty($password)) {
            $user['email'] = $email;
            $user['pass'] = $password;
        }
        return $user;
    }
}

// check if user is logged in
// login
//  success direct to notes
// else homepage
$tempUser = getLoginPost();
if (!empty($tempUser)) {
    var_dump($tempUser);
    // $_SESSION['logged_in'] = true;
    header("Location: createnote");
} 
