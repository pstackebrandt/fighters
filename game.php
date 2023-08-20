<?php

declare(strict_types=1);

require_once 'utility/print_helper.php';
require_once 'Player.php';
require_once 'DataManager.php';

// Contains info about what's done by the players.
$info = '';

if (isset($_POST['btnStart'])) {
    printWithTag('Create 2 players', 'p');
    // Create new players
    $p1 = new Player($_POST['p1_name']);
    $p2 = new Player($_POST['p2_name']);
} else {
    // Load players from file
    printWithTag('Load players', 'p');
    $p1 = DataManager::loadPlayer('1');
    $p2 = DataManager::loadPlayer('2');

    print_r($p1);
    printBR();
    print_r($p2);

    // Attack
    if (isset($_POST['p1_attack'])) {
        $info .= "$p1->name greift $p2->name an.";
    } elseif (isset($_POST['p2_attack'])) {
        $info .= "$p2->name greift $p1->name an.";
    }
}

// Save players to file
DataManager::savePlayer('1', $p1);
DataManager::savePlayer('2', $p2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>

<body>
    <h1>Game</h1>
    <h2><?php echo $p1->name ?></h2>
    Gesundheit: <?php echo $p1->getHealth(); ?>
    <br>
    Stärke: <?php echo $p1->getStrength(); ?>

    <form action="game.php" method="post">
        <input type="submit" name="p1_attack" value="Angriff">
    </form>

    <h2><?php echo $p2->name ?></h2>
    Gesundheit; <?php echo $p2->getHealth(); ?>
    <br>
    Stärke: <?php echo $p2->getStrength(); ?>

    <form action="game.php" method="post">
        <input type="submit" name="p2_attack" value="Angriff">
    </form>

    <p>
        <?php echo $info; ?>
    </p>

</body>

</html>