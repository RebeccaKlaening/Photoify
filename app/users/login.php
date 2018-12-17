<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';

if (isset($_POST['username'], $_POST['password'])) {
    $email = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    // Prepare, bind email parameter and execute the database query.
    $statement = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->execute();
    // Fetch the user as an associative array.
    $user = $statement->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $_SESSION['message'][] = "User with that email does not exist!";
    redirect('/');
}
// If we found the user in the database, compare the given password from the
// request with the one in the database using the password_verify function.
if (password_verify($_POST['password'], $user['password'])) {
    // If the password was valid we know that the user exists and provided
    // the correct password. We can now save the user in our session.
    // Remember to not save the password in the session!
    unset($user['password']);
    $_SESSION['user'] = $user;

    $_SESSION['message'][] = "Logged in ok!";

} else {
    $_SESSION['message'][] = "Wrong password!";
}
}

// We should put this redirect in the end of this file since we always want to
// redirect the user back from this file. We don't know
redirect('/');
