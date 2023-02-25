<?php

if (false) {
    $loginInfo = getLoginPost();
    if ($loginInfo) {
        $_SESSION["email"] = $loginInfo["email"];
        $_SESSION["pass"] = $loginInfo["pass"];
    }

}
$heading = "Login form";
include "view/login.view.php";

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
        $errorMessage = "";
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
function isUserLoggedIn(){
    // Start the session
    session_start();
    // If the user is not logged in, redirect them to the login page
    if( $_SESSION){
        header('Location: login');
        exit;
        return true;
    }
    //if user is not 
    return false;
}

function loginhandler () {

}

function logoutHandler () {

}
