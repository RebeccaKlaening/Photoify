<?php
declare(strict_types=1);
require __DIR__.'/app/autoload.php';

$statement = $pdo->query('SELECT * FROM users');
if(!$statement){
    die(var_dump($pdo->errorInfo()));
}

$users = $statement->fetch(PDO::FETCH_ASSOC);

die(var_dump($users));
