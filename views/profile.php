<?php
declare(strict_types=1);
require __DIR__.'/../app/autoload.php';

$userId = $_SESSION['user']['id'];

$errors = [];

if(isset($_FILES['profile_pic'])) {
  $profilePic = $_FILES['profile_pic'];
  if(!in_array($profilePic['type'], ['image/png', 'image/jpeg'])) {
      $errors[] = 'error';
  }


if($profilePic['size'] > 4194304) {
  $errors[] = 'to big file';
}

$fileExt = explode('.', $profilePic['name']);
$fileActualExt = strtolower(end($fileExt));


if(count($errors) === 0) {
  $fileName = "profile_$userId.$fileActualExt";
  $destination = __DIR__.'/../views/img/'.$fileName;

  move_uploaded_file($profilePic['tmp_name'], $destination);
  $_SESSION['user']['profile_pic'] = $fileName;

  $sql = "UPDATE users SET profile_pic = '$fileName' WHERE id = '$userId';";

  $statement = $pdo->query($sql);

  if (!$statement)
  {
      die(var_dump($pdo->errorInfo()));
  }
}

}
redirect('/index.php');

?>
