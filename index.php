<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';


if(!isset($_SESSION['logedin'])) {
    redirect('/login.php');
}


if(isset($_SESSION['message'])) {
    echo ($_SESSION['message'][0]);
    unset($_SESSION['message']);
}

?>

<article>
    <h1>Home</h1>
    <p>This is the home page.</p>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
