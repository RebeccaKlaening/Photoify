
<nav id ="navbar-js" class ="navbar">

    <ul>
        <div class="photoify">

        <?php if(isset($_SESSION['user'])): ?>
            <li class="hamburger-btn" onclick ="openSlideMenu()">
                <i class="fas fa-bars"></i>
            <?php endif; ?>
        </li>

        <li class="nav-item">
            <?php if(isset($_SESSION['user'])): ?>
                <!-- <a class="nav-link" href="/profile.php">Profile</a> -->
            <?php else: ?>
                <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
            <?php endif; ?>
        </li><!-- /nav-item -->

        <li class="nav-item">
            <?php if(!isset($_SESSION['user'])): ?>
                <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/start.php' ? 'active' : ''; ?>" href="create.php">Create Account</a>
            <?php endif; ?>
        </li><!-- /nav-item -->

        <li>
        <?php if(!isset($_SESSION['user'])): ?>

            <a class="nav-item" <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?> href="login.php">Login</a>
        <?php endif; ?>
        </li>

        </div>
</ul><!-- /navbar-nav -->

</nav><!-- /navbar -->


<div id ="side-menu" class="side-nav">

    <a href="#" class="btn-close" onclick ="closeSlideMenu()">&times;</a>

    <?php if(isset($_SESSION['user'])): ?>
        <a class="nav-link" href="/profile.php">Profile</a>
    <?php else: ?>
        <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
    <?php endif; ?>
    <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/gallery.php' ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
    <?php if(isset($_SESSION['user'])): ?>
        <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/start.php' ? 'active' : ''; ?>" href="update.php">Update Account</a>
    <?php endif; ?>

        <?php if(isset($_SESSION['user'])): ?>
            <a class="nav-link" href="/app/users/logout.php">Logout</a>
        <?php else: ?>
            <a class="nav-link" <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?> href="login.php">Login</a>
        <?php endif; ?>


</div>
