<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';

?>


<article>
    <h1><?php echo $config['title']; ?></h1>
    <!--- welcome text for the user <!---->
    <?php if (isset($_SESSION['user'])): ?>
   <p>Welcome, <?php echo $_SESSION['user']['name']; ?>!</p>
<?php endif; ?>

</article>
<div class="profile-pic">
<?php if (file_exists(__DIR__.'/views/img')): ?>
<img src="/views/img/<?= $_SESSION['logedin']['profile_pic'];?>" alt="profile" class="user">
 <?php endif; ?>
</div>

<form action="/views/profile.php" method="post" enctype="multipart/form-data">
<div>
  <label for="image">Please choose a profile image</label>
 <input type="file" name="profile_pic" id="image" accept=".jpg", ".jpeg", ".png" required>


</div>

<button type="submit" name ="submit">Upload</button>
</form>

<?php require __DIR__.'/views/footer.php'; ?>
