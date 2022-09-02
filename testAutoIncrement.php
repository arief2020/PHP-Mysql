<?php

require_once __DIR__ . '/getConection.php';

$connection = getConection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('akbar@gmail.com', 'my name akbar')");
$id =  $connection->lastInsertId();

echo "id : $id" . PHP_EOL;

$connection = null;