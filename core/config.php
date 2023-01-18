<?php
    $db_servername = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'create';

    $connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

    if(!$connection){
        die('Failed to make SQL connection: '. mysqli_connect_error());
    }

    define('BASE_URL', 'http://localhost/login-register-using-php-main/');
    define('BASE_PATH', 'C:\xampp\htdocs\login-register-using-php-main');
?>