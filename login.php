<?php require __DIR__.'/views/header.php'; ?>



<article class="create-login">

    <h1 class="h1-login">Login</h1>
    <form class ="login" action="app/users/login.php" method="post"><br>
            <label for="username">Username</label> <br><br>
            <input class="input" type="username" name="username" placeholder="Username" required>

        <div><br>
            <label for="password">Password</label> <br><br>
            <input class="input" type="password" name="password" required>

        </div><!-- /form-group -->
        <br>

        <button type="submit" class="profile-btn">Login</button>

    </form>
</article>

<div class="arrow">
    <a class="" href="/index.php"><i class="fas fa-arrow-left"></i></a>
</div>


<?php require __DIR__.'/views/footer.php'; ?>
