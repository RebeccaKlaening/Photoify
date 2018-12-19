<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';


    if (isset($_POST['profile_bio'])) {
        $id = $_SESSION['user']['id'];
        $bio = filter_var($_POST['profile_bio'],FILTER_SANITIZE_STRING);
        $statement = $pdo->prepare('UPDATE users SET profile_bio = :profile_bio WHERE id = :id');
        if (!$statement)
        {
            die(var_dump($pdo->errorInfo()));
        }
        // binds variables to parameteres for insert statement
        $statement->bindParam(':profile_bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        redirect('/profile.php');
}
