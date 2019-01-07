<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';
// In this file we delete new posts in the database.
if(isset($_POST['delete_post'])){

  $delete = trim(filter_var($_POST['delete_post'], FILTER_SANITIZE_NUMBER_INT));

$statement = $pdo->prepare('DELETE FROM posts WHERE id = :id');
//if not die
if (!$statement)
{
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
