<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';

?>

<article>
    <h1>Update Account</h1>

    <form action="app/users/update.php" method="post">
        <div class="form-group">
            <label for="username">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" required>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="name">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" required>

        </div><!-- /form-group -->


        <div class="form-group">
            <label for="email">New password</label>
            <input class="form-control" type="password" name="newPassword" placeholder="New password" required>

        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Old Password</label>
            <input class="form-control" type="password" name="password" placeholder="Old password" required>
            <small class="form-text text-muted"></small>
        </div><!-- /form-group -->

        <button type="submit" class="btn btn-primary">Update Account</button>

    </form>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
