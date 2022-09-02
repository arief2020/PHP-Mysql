<?php
require_once __DIR__ . '/getConection.php';

$connection = getConection();

$username = "admin#'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

$success = false;
$finduser = null;
foreach($prepareStatement as $row){
    $success =  true;
    $finduser = $row["username"];
}

if ($success) {
    echo "Sukses login : " . $finduser . PHP_EOL;
}else{
    echo "Gagal login" . PHP_EOL;
}

$connection = null;