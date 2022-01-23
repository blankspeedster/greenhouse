<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    $host = 'localhost';
    $username = 'greenhouse_database';
    $password = 'greenhouse_database';
    $database = 'greenhouse_database';

    $mysqli = new mysqli($host,$username,$password,$database) or die(mysqli_error($mysqli));

?>


