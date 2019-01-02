<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

$deletePost = filter_var(trim($_GET['user']),FILTER_SANITIZE_STRING);
$statement = $pdo->prepare('SELECT user_id FROM posts WHERE id = :id');
$statement->bindParam(':id', $deletePost, PDO::PARAM_STR);
$statement->execute();

$postId= $statement->fetch(PDO::FETCH_ASSOC);


$statement = $pdo->prepare('DELETE FROM posts WHERE id = :id');
$statement->bindParam(':id', $deletePost, PDO::PARAM_INT);
$statement->execute();


redirect('/');
