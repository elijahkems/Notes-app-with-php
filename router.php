<?php 
$uri = $_SERVER["REQUEST_URI"];
$uri = parse_url($uri)["path"];

$routes = [
    "/" => "controllers/index.php",
    "/index.php" => "controllers/index.php",
    "/index" => "controllers/index.php"
];

function abort () {
    http_response_code(404);
    require("views/404.php");
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
