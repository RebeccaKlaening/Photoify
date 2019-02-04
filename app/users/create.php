<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';

if (isset($_POST['email'], $_POST['password'], $_POST['username'], $_POST['name'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $userName = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);



    $statement = $pdo->prepare('INSERT INTO users (email, password, username, name) VALUES (:email, :password, :username, :name)');

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);

    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    $_SESSION['logedin'] = [
        'id' => $pdo->lastInsertId(),
        'email' => $email,
        'name' => $name,
        'profile_pic' => $profile_pic,
        'profile_bio' => $profile_bio,
        'username' => $userName,
    ];
    redirect('/login.php');
}



redirect('/create.php');
