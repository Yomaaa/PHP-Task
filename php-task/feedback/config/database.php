<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Zion');
    define('DB_PASS', 'zion');
    define('DB_NAME', 'phpdev');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn -> connect_error) {
        die('Connection Failed' . $conn ->connect_error);
    }

?>