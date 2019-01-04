<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if (isset($_POST['profile_bio'], $_POST['name'], $_POST['email'], $_POST['username'])) {



    if(!isset($_SESSION['user'])){
        redirect('/profile.php');
    } else {


        $id = $_SESSION['user']['id'];
        $bio = trim(filter_var($_POST['profile_bio'],FILTER_SANITIZE_STRING));
        $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $userName = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));

    }

        $statement = $pdo->prepare('UPDATE users SET profile_bio = :profile_bio, name = :name, email= :email, username = :username
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
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();


        // If password update was posted


        if(isset($_POST['newPassword'], $_POST['password']) && $_POST['password'] !== "") {


        if(!isset($_SESSION['user'])){
            redirect('/profile.php');
        } else {

        $newPassword = password_hash(filter_var(trim($_POST['newPassword']), FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
        }

        $statement = $pdo->prepare("UPDATE users SET password = :newPassword WHERE id = :id");

        if (!$statement)
        {
            die(var_dump($pdo->errorInfo()));
        }

        $statement->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->execute();
        $_SESSION['messages'][] = "Your password has been updated!";
    }






        // If name update was posted
    // if(isset($_POST['name']) && $_POST['name'] !== $_SESSION['user']['name']){
    //  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    //  $updateStatement = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
    //  $updateStatement->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
    //  $updateStatement->bindParam(':id', $id, PDO::PARAM_STR);
    //  $updateStatement->execute();
    //  $_SESSION['messages'][] = "Your name has been updated!";
    // }

    //     // If email update was posted
    // if(isset($_POST['email']) && $_POST['email'] !== $_SESSION['user']['email']){
    // $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    // $updateStatement = $pdo->prepare("UPDATE users SET email = :email WHERE id = :id");
    // $updateStatement->bindParam(':email', $email, PDO::PARAM_STR);
    // $updateStatement->bindParam(':id', $id, PDO::PARAM_STR);
    // $updateStatement->execute();
    // $_SESSION['messages'][] = "Your email has been updated!";
    //     }

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
