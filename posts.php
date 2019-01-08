<article>

    <form action="/app/posts/posts.php" method="post" enctype="multipart/form-data">

        <div>
            <input type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required>

            <p><b>Say something about this image</b><br></p>
            <label for="description"></label>
            <textarea class="form-control" type="description" name="description" id="description" rows="8" cols="40"></textarea>

        </div>
        <input class ="profile-btn" type="submit" name="content" value="Upload Image">
    </form>
    <br>


    <?php $posts = getPosts($_SESSION['user']['id'], $pdo);
    foreach($posts as $post): ?>
<section>
<div class="posts">
   <img src="<?='/app/posts/upload-posts/'. $post['content'];?>" class="image"></div></section>

    <p class ="description"><?php echo $post['description']; ?></p>


        <form action="app/posts/likes.php"  method="post" enctype="multipart/form-data">
            <input type="text" style="display:none" hidden name="post_id" value="<?= $post['id']?>">
            <div class="form-group">
                <label for="likes_add"></label>
            </div>

            <div type="submit" id ="heart-js" class="heart" onclick ="myFunction()" name="likes_add"><i class="far fa-heart"></i></div>

            <button id ="heart2-js" class="heart2" name="likes_add" onclick ="myFunction()"value=""><i class="fas fa-heart"></i>
                <?php echo $post['likes']?></button>

    </form>


    <i data-id="<?= $post['id']?>" class="far fa-edit change-post"></i>
    <div data-id="<?= $post['id']?>" class="post-edit">

        <form action="app/posts/edit.php"  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="editDescription"for="post_description">Edit description</label>
            <div class="form-control">

            <textarea type="text" name="post_description"> <?php echo $post['description']; ?></textarea></div>
            </div>
    <div class="edit">
     <button type="submit" class="post" name="post_id" value="<?= $post['id'] ?>">EDIT</button></div>
        </form>

        <form action="app/posts/delete.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="delete_post">Delete Post</label>
            </div>
            <div class="delete"><button type="submit" class="delete" name="post_id" value="<?= $post['id'] ?>">DELETE</button></div>
        </div>
    </form>
<?php endforeach; ?>

</article>
