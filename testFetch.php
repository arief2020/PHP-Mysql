<?php
require_once __DIR__ . '/getConection.php';

$connection = getConection();

$username = "arief";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();


if ($row = $prepareStatement->fetch()) {
    echo "Sukses login : " . $row["username"] . PHP_EOL;
}else{
    echo "Gagal login" . PHP_EOL;
}

var_dump($prepareStatement->fetch());

$connection = null;