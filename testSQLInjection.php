<?php
require __DIR__ . '/getConection.php';

$connection = getConection();

$usename = $connection->quote("admin'; #");
$password = $connection->quote("admin") ;
$sql = "SELECT * FROM admin WHERE username = $usename AND password = $password;";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

$success = false;
$find_user =  null;
foreach($statement as $row){
    $success = true;
    $find_user = $row["username"];
}

if($success){
    echo "Sukses login : " . $find_user . PHP_EOL;
}else{
    echo "Gagal Login";
}

$connection = null;
