<?php
echo '
    <!DOCTYPE html>
    <html>
    <head></head>
    <body>
';

$moneyIHave = 0;
$burgerPrice = 10;
$sandwichPrice = 5;
$hotdogPrice = 1;

// ✅ > 10 -> burger
// ✅ > 5 -> sandwich
// ✅ > 1 -> hotdog
// ✅ other cases -> go hunting

if ($moneyIHave > $burgerPrice) {
    echo '
        I will buy and eat a burger🍔<br>
        I will drink my soda🥤<br>
        I will enjoy my fries🍟<br>
    ';
} elseif ($moneyIHave > $sandwichPrice) {
    echo '
        Buy and eat a sandwich🥪<br>
    ';
} elseif ($moneyIHave > $hotdogPrice) {
    echo '
        Buy and eat a hotdog🌭<br>
    ';
} else {
    echo '
        Go hunting🏹🦌<br>
        Cook a meal🏕️🔥<br>
        Eat that meal🍖<br>
    ';
}

echo 'I want to have fun!';

echo '
    </body>
    </html>
';