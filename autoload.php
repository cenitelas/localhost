<?php

spl_autoload_register(function ($name){
    $path = "./classes/$name.php";

    if(file_exists($path))
        require_once $path;
});