<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

$moneyIHave = 2;
$burgerPrice = 10;
$sandwichPrice = 5;
$hotdogPrice = 1;

// ✅ > 10 -> burger
// ✅ > 5 -> sandwich
// ✅ > 1 -> hotdog
// ✅ other cases -> go hunting

if ($moneyIHave > $burgerPrice) {
    ?>
    I will buy and eat a burger🍔<br>
    I will drink my soda🥤<br>
    I will enjoy my fries🍟<br>
    <?php
} elseif ($moneyIHave > $sandwichPrice) {
    ?>
    Buy and eat a sandwich🥪<br>
    <?php
} elseif ($moneyIHave > $hotdogPrice) {
    ?>
    Buy and eat a hotdog🌭<br>
    <?php
} else {
    ?>
    Go hunting🏹🦌<br>
    Cook a meal🏕️🔥<br>
    Eat that meal🍖<br>
    <?php
}

echo 'I want to have fun!';

?>

</body>
</html>