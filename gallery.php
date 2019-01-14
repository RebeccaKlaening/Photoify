<?php
declare(strict_types=1);
require __DIR__.'/views/header.php'; ?>

<article class="gallery-page">


    <h1 class="gallery">Gallery</h1>
        <!-- <p class="gallery-p"><b>This is the gallery page<b></p> -->
    <?php if (file_exists(__DIR__.'/views/img')): ?>
        <img src="/views/img/<?= $_SESSION['logedin']['profile_pic'];?>" alt="profile" class="profile-gallery">
    <?php endif; ?>

<form action="/views/profile.php" method="post" enctype="multipart/form-data">
    <p><?php echo $_SESSION['logedin']['username']; ?></p>
</form><br>

</article>

<?php require __DIR__.'/posts.php';
require __DIR__.'/views/footer.php'; ?>
