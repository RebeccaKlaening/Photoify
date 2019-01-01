<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';


    if (isset($_POST['description'])) {

        $user_id = $_SESSION['user']['id'];
        $description = filter_var(trim($_POST['description'],FILTER_SANITIZE_STRING));

        $statement = $pdo->prepare('INSERT INTO posts (description, user_id) VALUES (:description, :user_id);');

        if (!$statement)
        {
            die(var_dump($pdo->errorInfo()));
        }
        // binds variables to parameteres for insert statement
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $statement->execute();



        redirect('/profile.php');
}
die(var_dump($_SESSION['posts']));

 ?>
