<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';
require __DIR__.'/views/profile.php';
?>


<article>
    <h1>Create Account</h1>

    <form action="app/users/create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="name">First name</label>
            <input class="form-control" type="text" name="first_name" placeholder="Firstname" required>

        </div><!-- /form-group -->

        <div class="form-group">
            <label for="name">Last name</label>
            <input class="form-control" type="text" name="last_name" placeholder="Lastname" required>

        </div><!-- /form-group -->

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="email@.com" required>

        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" required>
            <small class="form-text text-muted"></small>
        </div><!-- /form-group -->

        <form action="profile" method="post" enctype="multipart/form-data">
            <div>
                <label for="image">Please upload your profile pic</label>
                <input type="file" name="image" id="image" accept=".jpg, png" required>
            </div>

            <button type="submit">Upload</button>
        </form>
        <button type="submit" class="btn btn-primary">Create Account</button>

    </form>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
