<?php

spl_autoload_register(function($class){
    $array = explode('\\',$class);
    $file_name = implode("/",$array);
    require_once "$file_name.php";
});
