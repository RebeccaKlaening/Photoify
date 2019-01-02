<br>
<div class="posts">
    <form action="/app/posts/posts.php" method="post" enctype="multipart/form-data">
        <?php $posts = getPosts($_SESSION['user']['id'], $pdo);
        foreach($posts as $post): ?>
        <img src="<?='/app/posts/upload-posts/'. $post['content'];?>" class="image">
        <p><?php echo $post['description']; ?></p>
    <?php endforeach; ?>
<div class"post">
        <input type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required>


        <p><b>Say something about this image:</b><br></p>
        <label for="description"></label>
        <textarea class="form-control" type="description" name="description" id="description" rows="8" cols="50"></textarea>

    </div>
        <br>
    <div>
        <input class ="profile-btn" type="submit" name="content" value="Upload Image">

    </div>

</form>


</div>
