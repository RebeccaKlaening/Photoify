<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';


if(isset($_SESSION['message'])) {
    echo ($_SESSION['message'][0]);
    unset($_SESSION['message']);
}
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
  <label for="image">Please choose a profile image</label> <br>
 <input type="file" name="profile_pic" id="image" accept=".jpg", ".jpeg", ".png" required>

</div>
<br>
<button type="submit" name ="submit">Upload</button>
</form>

<div class="bio">
<form action="/app/users/bio.php" method="post" enctype="multipart/form-data">
<div class="form-group">
        <p>User name: <?php echo $_SESSION['user']['username']; ?></p>
        <p>Name: <?php echo $_SESSION['user']['name']; ?></p>
        <p>Say something about yourself: <?php echo $_SESSION['user']['profile_bio']; ?></</p>
         <label for="profile_bio"></label>
         <textarea class="form-control" type="profile_bio" name="profile_bio" id="profile_bio" rows="8" cols="80"></textarea>
       </div>
</div>
<button type="submit" class="bio-button">Add</button>
</form>


<?php require __DIR__.'/views/footer.php'; ?>
