<?php
declare(strict_types=1);
require __DIR__.'/views/header.php'; ?>

<form action="/app/posts/posts.php" method="post" enctype="multipart/form-data">

    <div class="pop-up">
        <h1>Upload Image</h1>
        <p class="pop-up-p"><b>Say something about this image</b><br></p>
        <label for="description"></label>
        <textarea class="image-desc" type="description" name="description" id="description" rows="8" cols="40"></textarea>
        <input class="upload-content" type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required><br>
        <button class ="profile-btn" type="submit" name="content" value="Upload Image">Upload</button>
    </div>

</form>
<br><br>

<?php require __DIR__.'/views/footer.php'; ?>
