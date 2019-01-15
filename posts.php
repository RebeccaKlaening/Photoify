<article>

    <?php $posts = getPosts($_SESSION['user']['id'], $pdo);
    foreach($posts as $post): ?>
<br><section>
<div class="posts">
   <img src="<?='/app/posts/upload-posts/'. $post['content'];?>" class="image"></div></section>

    <h2 class ="description"><?php echo $post['description']; ?></h2>


        <form class="form-heart" action="app/posts/likes.php"  method="post" enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="<?= $post['id']?>">
            <button id ="heart2-js" class="heart2" type="submit" name="likes_add" onclick ="myFunction()"value="">
            <div class="form-group">
                <i class="fas fa-heart"></i>
                <p class="p-heart"><?php echo $post['likes']?><p></button>
            </div>
    </form>


    <i data-id="<?= $post['id']?>" class="far fa-edit change-post"></i>
    <div data-id="<?= $post['id']?>" class="post-edit"><br>

        <form action="app/posts/edit.php"  method="post" enctype="multipart/form-data">

            <div>

            <textarea class="edit" type="text" name="post_description"> <?php echo $post['description']; ?></textarea></div>

    <div class="edit">
     <button type="submit" class="post" name="post_id" value="<?= $post['id'] ?>">EDIT</button></div><br>
        </form>

        <form action="app/posts/delete.php" method="post" enctype="multipart/form-data">

            <button type="submit" class="post" name="post_id" value="<?= $post['id'] ?>">DELETE</button>
        </div>
    </form><br><br><br><br><br>
<?php endforeach; ?>

</article>
