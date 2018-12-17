<?php require __DIR__.'/views/header.php'; ?>


<article>
    <h1>Create Account</h1>

    <form action="app/users/create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="text" placeholder="Username" required>
            <small class="form-text text-muted">Username</small>
        </div><!-- /form-group -->

            <div class="form-group">
                <label for="name">First name</label>
                <input class="form-control" type="text" name="text" placeholder="Firstname" required>
                <small class="form-text text-muted"></small>
            </div><!-- /form-group -->

                <div class="form-group">
                    <label for="name">Last name</label>
                    <input class="form-control" type="text" name="text" placeholder="Lastname" required>
                    <small class="form-text text-muted"></small>
                </div><!-- /form-group -->

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="email@.com" required>
            <small class="form-text text-muted">Please provide your email address.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" required>
            <small class="form-text text-muted">Please provide your password (passphrase).</small>
        </div><!-- /form-group -->

        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
