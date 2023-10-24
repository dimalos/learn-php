<?php

$moneyIHave = 50;
$burgerPrice = 10;
$sandwichPrice = 5;
$hotdogPrice = 1;

// ✅ > 10 -> burger
// ✅ > 5 -> sandwich
// ✅ > 1 -> hotdog
// ✅ other cases -> go hunting

if ($moneyIHave > $burgerPrice) {
    echo 'I will buy and eat a burger🍔<br>';
    echo 'I will drink my soda🥤<br>';
    echo 'I will enjoy my fries🍟<br>';
} elseif ($moneyIHave > $sandwichPrice) {
    echo 'Buy and eat a sandwich🥪<br>';
} elseif ($moneyIHave > $hotdogPrice) {
    echo 'Buy and eat a hotdog🌭<br>';
} else {
    echo 'Go hunting🏹🦌<br>';
    echo 'Cook a meal🏕️🔥<br>';
    echo 'Eat that meal🍖<br>';
}

echo 'I want to have fun!';