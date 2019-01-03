<article class="posts">
    <form action="/app/posts/posts.php" method="post" enctype="multipart/form-data">

        <div>
            <input type="file" name="content" value= 1000000 id="content" accept=".jpg", ".jpeg", ".png" required>

            <p><b>Say something about this image</b><br></p>
            <label for="description"></label>
            <textarea class="form-control" type="description" name="description" id="description" rows="8" cols="40"></textarea>

        </div>
        <br>
        <div>
            <input class ="profile-btn" type="submit" name="content" value="Upload Image">

        </div>
        <?php $posts = getPosts($_SESSION['user']['id'], $pdo);
        foreach($posts as $post): ?>
        <img src="<?='/app/posts/upload-posts/'. $post['content'];?>" class="image">

            <form action="app/posts/likes.php"  method="post" enctype="multipart/form-data">
            <div id ="heart-js" class="heart" onclick ="heartLikes()" ><i class="far fa-heart"></i></div>
            <div id ="heart-js" class="heart"onclick ="heartLikes()"><i class="fas fa-heart"></i></div>
            </form>

            <p class ="description"><?php echo $post['description']; ?></p>


            <form action="app/posts/updatePosts.php"  method="post" enctype="multipart/form-data">
               <div class="form-group">
                 <label for="post_description">Edit description</label>
                 <textarea class="form-control" type="text" name="post_description"> <?php echo $post['description']; ?></textarea>
               </div>
               <button type="submit" class="post" name="user_id" value="<?= $post['id'] ?>">EDIT</button>
             </form>

         <form action="app/posts/delete.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="delete_post">Delete Post</label>
           </div>
           <button type="submit" class="delete" name="delete_post" value="<?= $post['id'] ?>">DELETE</button>
         </form>

         </div>

    <?php endforeach; ?>


</form>
</article>
