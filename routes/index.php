<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/login.php',
    '/login' => 'controllers/login.php',
    '/dashboard' => 'controllers/dashboard.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code(404);

    require "views/{$code}.view.php";

    die();
}

routeToController($uri, $routes);
