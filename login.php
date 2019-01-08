<?php require __DIR__.'/views/header.php'; ?>



<article class="create-login">
        <div class="form-group">
    <h1 class="h1-login">Login</h1>
    <form action="app/users/login.php" method="post">
            <label for="username">Username</label> <br>
            <input type="username" name="username" placeholder="Username" required>

        <div class="form-group">
            <label for="password">Password</label> <br>
            <input type="password" name="password" required>

        </div><!-- /form-group -->

        <button type="submit" class="btn btn-primary">Login</button>
</div>
    </form>
</article>



<?php require __DIR__.'/views/footer.php'; ?>
