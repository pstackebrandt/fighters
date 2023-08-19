<?php

declare(strict_types=1);

require_once 'Player.php';

if (isset($_POST['btnStart'])) {
    # var_dump($_POST);
    $p1 = new Player($_POST['p1_name']);
    $p2 = new Player($_POST['p2_name']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>

<body>
    <h1><?php echo $p1->name ?></h1>
    Gesundheit: <?php echo $p1->getHealth(); ?>
    <br>
    Stärke: <?php echo $p1->getStrength(); ?>


    <h1><?php echo $p2->name ?></h1>
    Gesundheit; <?php echo $p2->getHealth(); ?>
    <br>
    Stärke: <?php echo $p2->getStrength(); ?>

</body>

</html>