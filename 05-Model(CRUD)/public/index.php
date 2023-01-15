<?php
if ( !session_id() ) {
    session_start();
}

// Bootstraping = memanggil seluruh file mvc
require '../app/init.php';

$app = new App;