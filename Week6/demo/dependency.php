<?php

function loadClass($class) {
    include 'lib/'.$class . '.php';
};

spl_autoload_register('loadClass');

session_start();