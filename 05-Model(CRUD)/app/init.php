<?php

// Untuk 'link' semua file
require 'config/config.php';

spl_autoload_register( function ( $class ) {
    require __DIR__ . '/core/' . $class . '.php';
} );