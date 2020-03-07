<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';
?>

<div class="container-profile">

<article class="profile-section">
    <h1>Profile</h1>
    <!--- welcome text for the user <!---->
    <?php if (isset($_SESSION['user'])): ?>
        <h2 class="welcome">Welcome, <?php echo $_SESSION['user']['name']; ?>!</h2>
    <?php endif; ?>

    <div>
        <?php if (file_exists(__DIR__.'/views/img')): ?>
            <img src="/views/img/<?= $_SESSION['logedin']['profile_pic'];?>" alt="profile" class="profile">
        <?php endif; ?>
    </div> <br>

<form action="/views/profile.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="image"></label>
        <input class="upload-content" type="file" name="profile_pic" id="image" accept=".jpg", ".jpeg", ".png" required><br><br>
        <button class="profile-btn" type="submit" name ="submit">Upload profilepic</button>
    </div>
<!-- <button class="profile-btn" type="submit" name ="submit">Upload profilepic</button> -->
</form><br>

</article>
    <div class="bio">
        <form action="/app/users/bio.php" method="post" enctype="multipart/form-data">
            <div class="user">
                <p><b>User name: </b><br><br><?php echo $_SESSION['logedin']['username']; ?></p>
                <p><b>Say something about yourself:</b><br><br> <?php echo $_SESSION['logedin']['profile_bio']; ?></p>
                <label for="profile_bio"></label>
            <!-- <textarea class="form-control" type="profile_bio" name="profile_bio" id="profile_bio" rows="8" cols="40"></textarea> -->
            </div><br>
        </form>

        <button class="profile-btn" type="submit"><a class="" href="/update.php">Update Bio</a></button><br><br><br><br>
        <!-- <button class="profile-btn" type="submit"><a class="" href="/gallery.php">Go to gallery</a></button><br><br><br> -->
    </div>

<?php require __DIR__.'/posts.php';
 require __DIR__.'/views/footer.php'; ?>
