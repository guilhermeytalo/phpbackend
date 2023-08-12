<?php
$title = '';
$id = null;

$base_dir = __DIR__.'/../controller/';

if(!empty($_GET["page"])){
    $file = "$base_dir/" . $_GET["page"] . "Controller.php";
    if (file_exists($file)) {
        include($file);
    } else {
        include("$base_dir/404.php");
    }
}else{
    include("$base_dir/login.php");
}