<?php 

ini_set('display_errors', 'On');
error_reporting(-1);

function __autoload($class_name)
{
    include $class_name . '.php';
}

