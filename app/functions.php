<?php

declare(strict_types=1);

if (!function_exists('redirect')) {
    /**
     * Redirect the user to given path.
     *
     * @param string $path
     *
     * @return void
     */
    function redirect(string $path)
    {
        header("Location: ${path}");
        exit;
    }
}

function getPosts(INT $id, $pdo) {

    $statement = $pdo->prepare('SELECT * FROM posts WHERE user_id = :user_id');
    $statement->bindParam(':user_id', $id, PDO::PARAM_INT);
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $posts;
}


function getLikes(INT $id, $pdo) {

    $statement = $pdo->prepare('SELECT * FROM likes WHERE post_id = :post_id');
    $statement->bindParam(':post_id', $id, PDO::PARAM_INT);
    $statement->execute();
    $likes = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $likes;
}


?>
