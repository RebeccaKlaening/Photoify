<?php require __DIR__.'/views/header.php';

if(isset($_SESSION['message'])) {
    echo ($_SESSION['message'][0]);
    unset($_SESSION['message']);
}
?>


<article class="create-login">

    <h1 class="create">Login</h1>
    <form class ="login" action="app/users/login.php" method="post"><br>
            <label for="username">Username</label> <br><br>
            <input class="input" type="username" name="username" placeholder="Username" required>

        <div><br>
            <label for="password">Password</label> <br><br>
            <input class="input" type="password" name="password" placeholder="Password"required>

        </div><!-- /form-group -->
        <br>
        <div class="btn-place">
        <button type="submit" class="profile-btn">Login</button>
        </div>
    </form>

</article>

<div class="arrow">
    <a class="" href="/index.php"><i class="fas fa-arrow-left"></i></a>
</div>


<?php require __DIR__.'/views/footer.php'; ?>
