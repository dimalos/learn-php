<?php
/**
 **Treasure Hunter: Finding Loot**

You are on a quest for treasure.

You have three booleans: $hasMap, $hasCompass, and $foundXMark.

- If you have both $hasMap and $foundXMark, you can locate the buried treasure.
- However, if you also have a $hasCompass, you can find a secret bonus loot.

 **What to Do:**

- If you find the main treasure, echo 'Main treasure found!'
- If you locate the secret bonus loot, echo 'Bonus loot discovered!'
- Otherwise, echo 'Keep searching.'
 */
$hasMap = true;
$hasCompass = false;
$foundXMark = true;

if ($hasMap && $foundXMark && $hasCompass) {
    echo 'Bonus loot discovered!';
} elseif ($hasMap && $foundXMark) {
    echo 'Main treasure found!';
} else {
    echo 'Keep searching.';
}

?>