<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';
?>


<article class="create-login">
<h1 class="create">Create Account</h1>

    <form class ="login" action="app/users/create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label><br><br>
            <input class="input" type="text" name="username" placeholder="Username" required>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="name">name</label><br><br>
            <input class="input" type="text" name="name" placeholder="Name" required>

        </div><!-- /form-group -->


        <div class="form-group">
            <label for="email">Email</label><br><br>
            <input class="input" type="email" name="email" placeholder="email@.com" required>

        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Password</label><br><br>
            <input class="input" type="password" name="password" required>
            <!-- <small class="form-text text-muted"></small> -->
        </div><!-- /form-group -->
        <br>

        <button class ="profile-btn " type="submit" class="btn btn-primary">Create Account</button>

    </form>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
