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


<?php require __DIR__.'/views/footer.php'; ?>
