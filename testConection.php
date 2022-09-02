<?php
$host = "localhost";
$port =  3306;
$database = "belajar_php_database";
$username = "root";
$password = "Suka-12345";
try {
    $conection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke dalam database mysql" . PHP_EOL;
    
    // menutup koneksi
    $conection = null;
} catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database mysql : " . $exception->getMessage() . PHP_EOL; 
}