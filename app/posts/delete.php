<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';

if (isset($_POST['post_id'])) {
    $delete = filter_var(trim($_POST['post_id']), FILTER_SANITIZE_NUMBER_INT);

    $statement = $pdo->prepare('DELETE FROM posts WHERE id = :id');
    //if not die
    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }
    $statement->bindParam(':id', $delete, PDO::PARAM_INT);
    $statement->execute();


    $_SESSION['posts'] = [
    'id' => $delete,
    'user_id' => $id,
    'content' => $content,
    'description' => $description,
    'created_at' => $created,
];

    redirect('/profile.php');
}
