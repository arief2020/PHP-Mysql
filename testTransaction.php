<?php 

require_once __DIR__ . '/getConection.php';

$connection = getConection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('pertama@gmail.com', 'hi satu')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('kedua@gmail.com', 'hi kedua')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ketiga@gmail.com', 'hi ketiga')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('keempat@gmail.com', 'hi keempat')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('kelima@gmail.com', 'hi kelima')");

$connection->commit();

$connection = null;