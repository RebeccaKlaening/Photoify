<?php
declare(strict_types=1);


if(isset($_POST['upload'])) {
$target = './img/'.basename($_FILES['image']['name']);

$content = $_FILES['image']['name'];
$description = $_POST ['description'];

$sql = 'INSERT INTO posts (content, description) VALUES (:content :description)';


}
?>

<div>
    <form action="/views/posts.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="size" value= 1000000 id="image" accept=".jpg", ".jpeg", ".png" required>
        <div>
            <input type="file" name="size">
        </div>
        <div>
            <textarea name="text" rows="4" cols="40" placeholder="Say something about this image..."></textarea>
        </div>
        <div>
        <input type="submit" name="upload" value="Upload Image">
        </div>
    </form>
</div>
