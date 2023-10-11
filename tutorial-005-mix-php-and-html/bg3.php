<?php

$character1 = 'Iron Man';
$impression1 = 'The game is amazing! It is worth every penny spent!';

$character2 = 'Mr. Strange';
$impression2 = 'Nothing special. The game shows my regular day.';

$character3 = 'Harry Potter';
$impression3 = 'Havent played the game. Busy fighting Lord Voldemort.';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Baldur's Gate 3</title>
</head>
<body>
<h1>Baldur's Gate 3</h1>
<ul>
    <li>
        <?= $character1 ?>:
        "<?= $impression1 ?>"
    </li>
    <li>
        <?= $character2 ?>:
        "<?= $impression2 ?>"
    </li>
    <li>
        <?= $character3 ?>:
        "<?= $impression3 ?>"
    </li>
</ul>
</body>
</html>