<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if (isset($_POST['profile_bio'], $_POST['name'], $_POST['email'], $_POST['username'],$_POST['password'])) {

    $id = $_SESSION['user']['id'];
    $bio = trim(filter_var($_POST['profile_bio'],FILTER_SANITIZE_STRING));
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $userName = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $statement = $pdo->prepare('UPDATE users SET profile_bio = :profile_bio, name = :name, email = :email, username = :username, password = :password
        WHERE id = :id');
    if (!$statement)
    {
        die(var_dump($pdo->errorInfo()));
    }
    // binds variables to parameteres for insert statement
    $statement->bindParam(':profile_bio', $bio, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);

    $statement->execute();

    redirect('/profile.php');
}
