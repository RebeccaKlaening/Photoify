
<div class="posts">
    <form action="/app/posts/posts.php" method="post" enctype="multipart/form-data">
        <?php $posts = getPosts($_SESSION['user']['id'], $pdo);
        foreach($posts as $post): ?>
        <img src="<?='/app/posts/upload-posts/'. $post['content'];?>" class="image">
        <p><?php echo $post['description']; ?></p>
    <?php endforeach; ?>

        <input type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required>

    <div>
        <p><b>Say something about this image:</b><br></p>
        <label for="description"></label>
        <textarea class="form-control" type="description" name="description" id="description" rows="4" cols="40"></textarea>
    </div>
    <div>
        <input type="submit" name="content" value="Upload Image">
    </div>

</form>


</div>
