<?php

require_once __DIR__ . '/getConection.php';

$connection = getConection();

$sql = "SELECT id, name, email FROM customers";
$statement = $connection->query($sql);

foreach($statement as $row){
    // var_dump($row);
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "id : $id" . PHP_EOL;
    echo "name : $name" . PHP_EOL;
    echo "email : $email" . PHP_EOL;
}
$connection = null;