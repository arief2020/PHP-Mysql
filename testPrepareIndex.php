<?php
require_once __DIR__ . '/getConection.php';

$connection = getConection();

$username = "arief";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam(1, $username);
$prepareStatement->bindParam(2, $password);
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