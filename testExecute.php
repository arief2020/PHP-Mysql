<?php
require_once __DIR__ . '/getConection.php';

$connection = getConection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('muhammad', 'muhammad', 'muhammad@gmail.com');
SQL;

$connection->exec($sql);

$connection = null;