<?php
session_start();
$page = isset($_GET['PAGE']) ? $_GET['PAGE'] : 'login';
require('./routes/' . $page . '.php');
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
    <?php require("./view/$page.php"); ?>
</section>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>