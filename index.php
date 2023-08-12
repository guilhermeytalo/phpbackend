<?php
session_start();

$routes = include('./routes/routes.php');


$request_uri = $_SERVER['REQUEST_URI'];


$path = ltrim(parse_url($request_uri, PHP_URL_PATH), '/');


$page = isset($routes[$path]) ? str_replace('.php', '', $routes[$path]) : 'login';

require('./routes/index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Back</title>
</head>

<body>
<section>
    <?php require("view/$page.php"); ?>
</section>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>