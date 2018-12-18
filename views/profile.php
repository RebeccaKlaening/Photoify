<?php
declare(strict_types=1);
if (isset($_FILES['image'])) {
   $profile = $_FILES['image'];
   if ($profile['type'] === 'jpg/jpeg/png') {
    move_uploaded_file($profile['tmp_name'], __DIR__.'/img/'.$profile['name']);
   } else {
    echo 'Wrong type!';
   }
}

?>
