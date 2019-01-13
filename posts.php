<article>

    <form action="/app/posts/posts.php" method="post" enctype="multipart/form-data">

        <div>
            <p><b>Say something about this image</b><br></p>
            <label for="description"></label>
            <textarea class="image-desc" type="description" name="description" id="description" rows="8" cols="40"></textarea>
            <input type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required>
        </div>
        <button class ="profile-btn" type="submit" name="content" value="Upload Image">Upload Image</button>
    </form>
    <br>


    <?php $posts = getPosts($_SESSION['user']['id'], $pdo);
    foreach($posts as $post): ?>
<section>
<div class="posts">
   <img src="<?='/app/posts/upload-posts/'. $post['content'];?>" class="image"></div></section>

    <h2 class ="description"><?php echo $post['description']; ?></h2>


        <form action="app/posts/likes.php"  method="post" enctype="multipart/form-data">
            <input type="text" style="display:none" hidden name="post_id" value="<?= $post['id']?>">
            <div class="form-group">
                <label for="likes_add"></label>
            </div>

            <button id ="heart2-js" class="heart2" name="likes_add" onclick ="myFunction()"value=""><i class="fas fa-heart"></i>
                <?php echo $post['likes']?></button>

    </form>


    <i data-id="<?= $post['id']?>" class="far fa-edit change-post"></i>
    <div data-id="<?= $post['id']?>" class="post-edit"><br>

        <form action="app/posts/edit.php"  method="post" enctype="multipart/form-data">

            <div class="form-control">

            <textarea class="edit" type="text" name="post_description"> <?php echo $post['description']; ?></textarea></div>

    <div class="edit">
     <button type="submit" class="post" name="post_id" value="<?= $post['id'] ?>">EDIT</button></div><br>
        </form>

        <form action="app/posts/delete.php" method="post" enctype="multipart/form-data">
            <!-- <div class="form-group">
                <!-- <label for="delete_post">Delete Post</label> -->
            <!-- </div> -->
            <button type="submit" class="post" name="post_id" value="<?= $post['id'] ?>">DELETE</button>
        </div>
    </form>
<?php endforeach; ?>

</article>
