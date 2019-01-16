<?php
declare(strict_types=1);
require __DIR__.'/views/header.php'; ?>

<article class="gallery-page">


    <!-- <p class="gallery-p"><b>This is the gallery page<b></p> -->
    <?php if (file_exists(__DIR__.'/views/img')): ?>
        <img src="/views/img/<?= $_SESSION['logedin']['profile_pic'];?>" alt="profile" class="profile-gallery">
    <?php endif; ?>

    <form action="/views/profile.php" method="post" enctype="multipart/form-data">
        <p class="p-gallery"><?php echo $_SESSION['logedin']['username']; ?></p>
    </form><br>

</article>
<h1 class="gallery">Gallery</h1>
<article class="getAllPosts">

    <?php $allPosts = getAllPosts($pdo);
    foreach($allPosts as $allPost): ?>
    <br><section>
        <div class="posts">
            <img class="profile-user" src="/views/img/<?= $allPost['profile_pic']?>" alt=""></div>
            <h3 class="h3-user"><?= $allPost['username']?> post:</h3>
            <!-- want to  put everys profile pic over the pi -->
            <img class="image" src="app/posts/upload-posts/<?= $allPost['content'] ?>" alt="">
            <h2 class ="description"><?= $allPost['description']?></h2>

            <form class="form-heart" action="app/posts/likes.php"  method="post" enctype="multipart/form-data">
                <input type="hidden" name="post_id" value="<?= $allPost['id']?>">

                <button id ="heart2-js" class="heart2" type="submit" name="likes_add"value="">
                    <div class="form-group">
                        <i class="fas fa-heart"></i>
                        <p class="p-heart" data-id="<?= $post['id'] ?>"><?php echo $allPost['likes']?><p></button><br>

                        </div>
                    </form>
                <?php endforeach; ?>

            </article>

            <?php require __DIR__.'/views/footer.php'; ?>
