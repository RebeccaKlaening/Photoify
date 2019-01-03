<?php require __DIR__.'/views/header.php'; ?>



<article class="create-login">

    <h1 class="h1-login">Login</h1>
    <form action="app/users/login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label> <br>
            <input class="form-control" type="username" name="username" placeholder="Username" required>

        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Password</label> <br>
            <input class="form-control" type="password" name="password" required>

        </div><!-- /form-group -->

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</article>



<?php require __DIR__.'/views/footer.php'; ?>
