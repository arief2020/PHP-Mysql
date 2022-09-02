<?php
function getConection(): PDO {
    $host = "localhost";
    $port =  3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "Suka-12345";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

