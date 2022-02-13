<?php

function autoloader($class){
    require_once 'classes/'.$class.'.php';
}
spl_autoload_register('autoloader');