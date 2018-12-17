<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';

if(isset($_POST['email'], $_POST['password'], $_POST['username'], $_POST['first_name'], $_POST['last_name'])) {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $userName = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $firstName = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);

    $statement = $pdo->prepare('INSERT INTO users (email, password, username, first_name, last_name)
    VALUES (:email, :password, :username, :first_name, :last_name)');

    if(!$statement) {
      die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->bindParam(':first_name', $firstName, PDO::PARAM_STR);
    $statement->bindParam(':last_name', $lastName, PDO::PARAM_STR);

    $statement->execute();
}

redirect('/');
