<?php
    require_once "vendor/autoload.php";
    use SSD\DotEnv\DotEnv;
    $dotEnv = new DotEnv(__DIR__.'/..');
    $dotEnv->load();
     
?>