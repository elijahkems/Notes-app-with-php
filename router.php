<?php 
$uri = $_SERVER["REQUEST_URI"];
$uri = parse_url($uri)["path"];

$routes = [
    "/" => "controllers/home.php",
    "/index.php" => "controllers/home.php",
    "/index" => "controllers/home.php",
    "/notes" => "controllers/notes.php",
    "/createnote" => "controllers/createnote.php",
    "/login" => "controllers/login.php",
    "/sign-up" => "controllers/sign-up.php"
];

function abort () {
    http_response_code(404);
    require("view/404.php");
    die();
}


function routeToController ($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
       abort();
    }
}
routeToController($uri, $routes);
