<?php

// Untuk 'link' semua file
require 'const/Constants.php';

spl_autoload_register( function ( $class ) {
    require __DIR__ . '/core/' . $class . '.php';
} );