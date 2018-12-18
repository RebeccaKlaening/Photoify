<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';


if(!isset($_SESSION['logedin'])) {
    redirect('/login.php');
}


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
<img src="views/img/<?= $_SESSION['logedin']['profile_pic'];?>" alt="profile" class="user">
<?php endif; ?>


<form action="/views/profile.php" method="post" enctype="multipart/form-data">
<div>
  <label for="image">Please choose a profile image</label>
  <input type="file" name="file" id="image" accept=".jpg", "jpeg", "png" required>

</div>

<button type="submit" name ="submit">Upload</button>
</form>

<?php require __DIR__.'/views/footer.php'; ?>
