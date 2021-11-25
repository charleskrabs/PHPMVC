<?php
//Autoload
spl_autoload_register(function($class_name){
    if(strpos($class_name,"Controller")!==false || $class_name=='App'){
        include_once "Controller/".$class_name.".php";
    }else{
        include_once "Model/".$class_name.".php";
    }

});
include_once "Route/route.php";