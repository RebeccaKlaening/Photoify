<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if(isset($_SESSION['user']['id']))

$statement = $pdo->prepare('SELECT * FROM users WHERE id= :id');

    if(!$statement) {
      die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':username', $userName, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);


    $statement->execute();
}

$sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
