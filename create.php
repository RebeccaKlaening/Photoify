<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';

if (isset($_SESSION['message'])) {
    echo($_SESSION['message'][0]);
    unset($_SESSION['message']);
}
?>


<article class="create-login">
    <h1 class="create">Create Account</h1>

    <form class ="login" action="app/users/create.php" method="post">
        <div class="form-group"><br>
            <label for="username">Username</label><br>
            <input class="input" type="text" name="username" placeholder="Username" required><br>
        </div><!-- /form-group -->

        <div class="form-group"><br>
            <label for="name">name</label><br>
            <input class="input" type="text" name="name" placeholder="Name" required><br>

        </div><!-- /form-group -->


        <div class="form-group"><br>
            <label for="email">Email</label><br>
            <input class="input" type="email" name="email" placeholder="email@.com" required><br>

        </div><!-- /form-group -->

        <div class="form-group"><br>
            <label for="password">Password</label><br>
            <input class="input" type="password" name="password" placeholder="password" required><br>
            <!-- <small class="form-text text-muted"></small> -->
        </div><!-- /form-group -->
        <br>

        <div class="btn-place">
        <button class ="profile-btn " type="submit" class="btn btn-primary">Create Account</button>
        </div>
    </form>

</article>

<div class="arrow">
    <a class="" href="/index.php"><i class="fas fa-arrow-left"></i></a>
</div>

<?php require __DIR__.'/views/footer.php'; ?>
