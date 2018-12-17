<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';


 ?>
 <?php if(isset($_SESSION['message'])) {
    echo ($_SESSION['message'][0]);

    unset($_SESSION['message']);
}
?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <p>This is the home page.</p>
</article>


<?php require __DIR__.'/views/footer.php'; ?>
