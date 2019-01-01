<?php
declare(strict_types=1);

require __DIR__.'/../app/autoload.php';

$userId = $_SESSION['user']['user_id'];

$errors = [];

if(isset($_FILES['content'])) {
  $content = $_FILES['content'];
  if(!in_array($content['type'], ['image/png', 'image/jpeg'])) {
      $errors[] = 'error';
  }


if($content['size'] > 4194304) {
  $errors[] = 'to big file';
}

$fileExt = explode('.', $content['name']);
$fileActualExt = strtolower(end($fileExt));


if(count($errors) === 0) {
  $fileName = "content_$userId.$fileActualExt";
  $destination = './img/'.$fileName;

  move_uploaded_file($content['tmp_name'], $destination);
  $_SESSION['user']['content'] = $fileName;

  $sql = "UPDATE posts SET content = '$fileName' WHERE user_id = '$userId';";

  $statement = $pdo->query($sql);

  if (!$statement)
  {
      die(var_dump($pdo->errorInfo()));
  }
}


redirect('/profile.php');
}
?>
