<?php 

require_once __DIR__ . '/getConection.php';

$connection = getConection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('hi1@gmail.com', 'hi satu')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('h2@gmail.com', 'hi kedua')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('hi3@gmail.com', 'hi ketiga')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('hi4@gmail.com', 'hi keempat')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('hi5@gmail.com', 'hi kelima')");

$connection->rollBack();

$connection = null;