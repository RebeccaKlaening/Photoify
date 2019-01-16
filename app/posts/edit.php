<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';

if(isset($_POST['post_description'], $_POST['post_id'])){

  $description  = trim(filter_var($_POST['post_description'], FILTER_SANITIZE_STRING));
  $id = (int) $_POST['post_id'];

  $statement = $pdo->prepare('UPDATE posts SET description = :description WHERE id = :id');
  //if not die
  if (!$statement)
  {
      die(var_dump($pdo->errorInfo()));
  }

  $statement->bindParam(':description', $description, PDO::PARAM_STR);
  $statement->bindParam(':id', $id, PDO::PARAM_INT);
  $statement->execute();


  $_SESSION['posts'] = [
      'user_id' => $id,
      'content' => $content,
      'description' => $description,
      'created_at' => $created,
  ];
}
redirect('/profile.php');
