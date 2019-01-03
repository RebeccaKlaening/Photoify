<?php
declare(strict_types=1);
require __DIR__.'/../autoload.php';
// In this file we delete posts in the database.
if(isset($_POST['dislikes'], $_POST['likes'])){

  $likes  = trim(filter_var($_POST['likes'], FILTER_SANITIZE_STRING));
  $id = (int) $_POST['post_id'];

  $statement = $pdo->prepare('INSERT INTO likes(post_id, likes) VALUES( :post_id,likes)');
  //if not die
  if (!$statement)
  {
      die(var_dump($pdo->errorInfo()));
  }

  $statement->bindParam(':likes', $dislikes, PDO::PARAM_STR);
  $statement->bindParam(':post_id', $id, PDO::PARAM_INT);
  $statement->execute();

    $_SESSION['likes'] = [
        'post_id' => $id,
        'likes' => $likes,
        'dislikes' => $dislikes,

    ];
  }
redirect('/profile.php');
