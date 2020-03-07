<?php
declare(strict_types=1);
require __DIR__.'/../app/autoload.php';

$userId = $_SESSION['user']['id'];

$errors = [];

if (isset($_FILES['profile_pic'])) {
    $profilePic = $_FILES['profile_pic'];
    if (!in_array($profilePic['type'], ['image/png', 'image/jpeg'])) {
        $errors[] = 'error';
    }


    if ($profilePic['size'] > 4194304) {
        $errors[] = 'to big file';
    }

    $fileExt = explode('.', $profilePic['name']);
    $fileActualExt = strtolower(end($fileExt));


    if (count($errors) === 0) {
        $fileName = "profile_$userId.$fileActualExt";
        $destination = './img/'.$fileName;

        move_uploaded_file($profilePic['tmp_name'], $destination);
        $_SESSION['user']['profile_pic'] = $fileName;

        $sql = "UPDATE users SET profile_pic = '$fileName' WHERE id = '$userId';";

        $statement = $pdo->query($sql);

        if (!$statement) {
            die(var_dump($pdo->errorInfo()));
        }
    }

    $statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    $_SESSION['logedin'] = [
    'id' => $user['id'],
    'email' => $user['email'],
    'name' => $user['name'],
    'profile_pic' => $user['profile_pic'],
    'profile_bio' => $user['profile_bio'],
    'created_at' => $user['created_at'],
    'username' => $user['username'],
    'content' => $user['content'],
    'description' => $user['description']
];
    redirect('/profile.php');
}
