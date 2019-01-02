<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';
?>


<article class="create-login">
<h1>Create Account</h1>

    <form action="app/users/create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="name">name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" required>

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

        <button type="submit" class="btn btn-primary">Create Account</button>

    </form>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
