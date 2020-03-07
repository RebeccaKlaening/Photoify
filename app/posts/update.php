<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if (!isset($_SESSION['user'])) {
    redirect('/profile.php');

} else {
    $id = $_SESSION['user']['id'];

    $statement = $pdo->prepare('SELECT * FROM users WHERE username = :username');

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }


    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Username update
    if (isset($_POST['username']) && $_POST['username'] !== $user['username']) {
        $userName = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);

        $statement = $pdo->prepare("UPDATE users SET username = :username WHERE id = :id");
        $statement->bindParam(':username', $userName, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->execute();

        $_SESSION['messages'][] = "Your username has been updated!";
    }

    // bio update
    if (isset($_POST['profile_bio']) && $_POST['profile_bio'] !== $user['profile_bio']) {
        $bio = filter_var(trim($_POST['profile_bio']), FILTER_SANITIZE_STRING);

        $statement = $pdo->prepare("UPDATE users SET profile_bio = :profile_bio WHERE id = :id");
        $statement->bindParam(':profile_bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->execute();

        $_SESSION['messages'][] = "Your bio has been updated!";
    }

    // name update
    if (isset($_POST['name']) && $_POST['name'] !== $_SESSION['user']['name']) {
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

        $updateStatement = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
        $updateStatement->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
        $updateStatement->bindParam(':id', $id, PDO::PARAM_STR);
        $updateStatement->execute();

        $_SESSION['messages'][] = "Your name has been updated!";
    }


    // If email update was posted
    if (isset($_POST['email']) && $_POST['email'] !== $_SESSION['user']['email']) {
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
        $updateStatement = $pdo->prepare("UPDATE users SET email = :email WHERE id = :id");
        $updateStatement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $updateStatement->bindParam(':id', $id, PDO::PARAM_STR);
        $updateStatement->execute();
        $_SESSION['messages'][] = "Your email has been updated!";
    }

    // If password update was posted
    if (isset($_POST['newPassword'], $_POST['password']) && $_POST['password'] !== "") {
        if ($_POST['newPassword'] === $_POST['password'] && $_POST['password'] === "") {
            $_SESSION['error']['message'] = "You cannot use the same password again!";

            redirect("/profile.php");

            if (!isset($_SESSION['user'])) {
                redirect('/profile.php');
            } else {
                $newPassword = password_hash(filter_var(trim($_POST['newPassword']), FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);


                $updateStatement = $pdo->prepare("UPDATE users SET password = :newPassword WHERE id = :id");

                $updateStatement->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
                $updateStatement->bindParam(':id', $id, PDO::PARAM_STR);
                $updateStatement->execute();
                $_SESSION['messages'][] = "Your password has been updated!";
            }
        }

        $statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
        $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        $_SESSION['logedin'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'name' => $user['name'],
        'profile_pic' => $user['profile_pic'],
        'profile_bio' => $user['profile_bio'],
        'username' => $user['username'],
    ];
        redirect('/profile.php');
    }
}
