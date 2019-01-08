<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';

?>

<article class="update">
    <h1>Update Account</h1>

    <form action="app/posts/update.php" method="post">
        <div class="update-form">
            <label for="username">User Name</label>
            <input class="form-control" type="text" name="username" placeholder="User Name" value="<?= $_SESSION['user']['username']?>">
        </div><!-- /form-group -->
            <br>
        <div class="update-form">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" value="<?= $_SESSION['user']['name']?>">
        </div><!-- /form-group -->
            <br>
        <div class="update-form">
            <label for="name">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" value="<?= $_SESSION['user']['email']?>">

        </div><!-- /form-group -->
            <br>
        <div class="update-form">
                 <label for="profile_bio">Edit Profilbio</label>
                 <textarea class="form-control" type="profile_bio" name="profile_bio" id="profile_bio" rows="8" cols="50"><?= $_SESSION['user']['profile_bio'] ?></textarea>
               </div>
                <br>
        <div class="update-form">
            <label for="email">New password</label>
            <input class="form-control" type="password" name="newPassword" placeholder="New password">

        </div><!-- /form-group -->
            <br>

        <div class="update-form">
            <label for="password">Old Password</label>
            <input class="form-control" type="password" name="password" placeholder="Old password" required>
            <small class="form-text text-muted"></small>
        </div><!-- /form-group -->
            <br>
        <button class ="profile-btn" type="submit" class="btn btn-primary">Confirm changes</button>

    </form>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
