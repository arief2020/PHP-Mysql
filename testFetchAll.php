<?php
require_once __DIR__ . '/getConection.php';

$connection = getConection();



$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

$customers = $statement->fetchAll();
var_dump($customers);

$connection = null;