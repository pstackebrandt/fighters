<?php

declare(strict_types=1);

require_once 'Player.php';

if (isset($_POST['btnStart'])) {
    # var_dump($_POST);
    $p1 = new Player($_POST['p1_name']);
    $p2 = new Player($_POST['p2_name']);
    var_dump($p1);
    echo '<br>';
    var_dump($p2);
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

</body>

</html>