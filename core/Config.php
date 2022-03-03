<?php

namespace core;

spl_autoload_register(function ($class_name){
    echo $class_name.'.php'."\n";
    $class_name = str_replace('\\', '/', $class_name);
    require_once($class_name.'.php');
});
echo "Hola desde config"."\n";