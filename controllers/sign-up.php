<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = [];
    $email = $password = "";
    $errorMessage = "";
    $email = validateString($_POST["login-email"]);
    $password = validateString($_POST["login-password"]);
    $repeatPassword = validateString($_POST["login-repeat-password"]);

    //check if empty
    if (!empty($email) && !empty($password) && !empty($repeatPassword)) {
        $user['email'] = $email;
        $user['pass'] = $password;
    }
}
$heading = "Sign up";
include "view/sign-up.view.php";

function validateString($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}