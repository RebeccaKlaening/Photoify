<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';


if(!isset($_SESSION['logedin'])) {
    redirect('/index.php');
}


if(isset($_SESSION['message'])) {
    echo ($_SESSION['message'][0]);
    unset($_SESSION['message']);
}

?>


<article class="start">
    <h1 class="home">Photoify</h1>
</article>
<div class="links">

    <div class="create-account">
        <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/start.php' ? 'active' : ''; ?>" href="create.php">Create Account</a>
    </div>

    <div class="start-login">
        <a class="nav-item" <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?> href="login.php">Login</a>
    </div>
</div>

<?php require __DIR__.'/views/footer.php'; ?>
