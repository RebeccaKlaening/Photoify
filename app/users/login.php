<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';

if (isset($_POST['username'], $_POST['password'])) {
    $userName = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));

    $statement = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $_SESSION['message'][] = "User with that email does not exist!";
    redirect('/');
}

if (password_verify($_POST['password'], $user['password'])) {

    unset($user['password']);
    $_SESSION['user'] = $user;

    $_SESSION['message'][] = "Logged in ok!";

} else {
    $_SESSION['message'][] = "Wrong password!";
    redirect('/login.php');
}
}


redirect('/');
