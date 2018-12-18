<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';
require __DIR__.'/views/profile.php';

if(isset($_SESSION['message'])) {
    echo ($_SESSION['message'][0]);
    unset($_SESSION['message']);
}

?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <p>This is the home page.</p>
</article>
<?php if (file_exists(__DIR__.'/views/img')): ?>
<img src="avatar2.png" alt="profile" class="user">
<?php endif; ?>
<form action="index.php" method="post" enctype="multipart/form-data">
<div>
  <label for="image">Please choose a profile image</label>
  <input type="file" name="image" id="image" accept=".jpg", "jpeg", "png" required>

</div>

<button type="submit">Upload</button>
</form>

<?php require __DIR__.'/views/footer.php'; ?>
