<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';
// In this file we delete posts in the database.
if(isset($_POST['dislikes'], $_POST['likes'])){

  $dislikes  = trim(filter_var($_POST['dislikes'], FILTER_SANITIZE_STRING));
  $id = (int) $_POST['post_id'];

  $statement = $pdo->prepare('INSERT INTO likes(post_id, dislikes) VALUES(:post_id, :dislikes)');
  //if not die
  if (!$statement)
  {
      die(var_dump($pdo->errorInfo()));
  }

  $statement->bindParam(':dislikes', $dislikes, PDO::PARAM_STR);
  $statement->bindParam(':post_id', $id, PDO::PARAM_INT);
  $statement->execute();


  $_SESSION['likes'] = [
      'post_id' => $id,
      'likes' => $likes,
      'dislikes' => $dislikes,

  ];
}
redirect('/profile.php');
