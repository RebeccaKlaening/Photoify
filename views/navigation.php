

<nav class ="navbar">
  <!-- <a href="#">; ?></a> -->
  <ul>
      <div class="hamburger-btn" onclick ="openSlideMenu()">
          <i class="fas fa-bars"></i>

      </div>
      <li class="nav-item">

          <?php if(isset($_SESSION['user'])): ?>
              <a class="nav-link" href="/profile.php">Profile</a>
          <?php else: ?>
          <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
            <?php endif; ?>
        </li><!-- /nav-item -->

      <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/about.php' ? 'active' : ''; ?>" href="about.php">About</a>
      </li><!-- /nav-item -->

      <li class="nav-item">
        <?php if(!isset($_SESSION['user'])): ?>
          <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/start.php' ? 'active' : ''; ?>" href="create.php">Create Account</a>
        <?php endif; ?>
    </li><!-- /nav-item -->
      <li class="nav-item">
          <?php if(isset($_SESSION['user'])): ?>
          <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/start.php' ? 'active' : ''; ?>" href="update.php">Update Account</a>
            <?php endif; ?>
    </li><!-- /nav-item -->
      <li class="nav-item">
        <?php if(isset($_SESSION['user'])): ?>
            <a class="nav-link" href="/app/users/logout.php">Logout</a>
        <?php else: ?>
            <a class="nav-link" <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?> href="login.php">Login</a>
        <?php endif; ?>
      </li><!-- /nav-item -->
  </ul><!-- /navbar-nav -->
</nav><!-- /navbar -->
<div id ="side-menu" class="side-nav">
<a href="#" class="btn-close" onclick ="closeSlideMenu()">&times;</a>
<a href="/profile.php">Profile</a>
<a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/about.php' ? 'active' : ''; ?>" href="about.php">About</a>
<a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/start.php' ? 'active' : ''; ?>" href="update.php">Update Account</a>
<a class="nav-link" href="/app/users/logout.php">Logout</a>

</div>
