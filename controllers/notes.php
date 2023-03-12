<?php
if ($_SESSION["loggedIn"] == false) {
    header('Location: login');
}

$notes = [
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus necessitatibus at accusantium error earum maxime provident, mollitia moleoribus eveniet consequatur voluptate minus doloribus suscipit?",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus necessitatibus at accusantium error earum maxime provident, mollitia moleoribus eveniet consequatur voluptate minus doloribus suscipit?",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus necessitatibus at accusantium error earum maxime provident, mollitia moleoribus eveniet consequatur voluptate minus doloribus suscipit?"
];
$users = [
    "kevin", "marilyn","doe"
];
$heading = "Your notes";
include "view/notes.view.php";