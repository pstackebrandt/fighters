<?php

declare(strict_types=1);

require_once 'Player.php';

$info = '';

if (isset($_POST['btnStart'])) {
    # var_dump($_POST);
    $p1 = new Player($_POST['p1_name']);
    $p2 = new Player($_POST['p2_name']);
} elseif (isset($_POST['p1_attack'])) {
    $info .= "$p1->name greift $p2-name an.";
} elseif (isset($_POST['p2_attack'])) {
    $info .= "$p2->name greift $p1-name an.";
} else {
    echo 'No change found. Error?';
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

    <form action="game.php" method="post">
        <input type="submit" name="p1_attack" value="Angriff">
    </form>

    <h1><?php echo $p2->name ?></h1>
    Gesundheit; <?php echo $p2->getHealth(); ?>
    <br>
    Stärke: <?php echo $p2->getStrength(); ?>

    <form action="game.php" method="post">
        <input type="submit" name="p2_attack" value="Angriff">
    </form>

</body>

</html>