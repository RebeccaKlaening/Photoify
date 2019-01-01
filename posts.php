<div>
    <?php if (file_exists(__DIR__.'/views/img')): ?>
        <img src="<?='/views/img/';?>" alt="image" class="image">
    <?php endif; ?>
</div>

<div>
    <form action="/views/posts.php" method="post" enctype="multipart/form-data">
        <input type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required>
        <form action="/app/users/description.php" method="post">
            <div>
                <p><b>Say something about this image:</b><br> </p>
                <label for="description"></label>
                <textarea class="form-control" type="description" name="description" id="description" rows="8" cols="40"></textarea>
            </div>
            <div>
                <input type="submit" name="content" value="Upload Image">
            </div>
        </form>

    </form>

</div>
