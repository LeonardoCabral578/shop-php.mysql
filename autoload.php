<?php

function controllers_autoloader($classname){
    include 'controllers/'. $classname. '.php';
}

spl_autoload_register('controllers_autoloader');