<?php

$myCoins = 55;
$shieldPrice = 50;
$isShieldAvailable = false;

if (($myCoins > $shieldPrice || $myCoins === $shieldPrice) && $isShieldAvailable) {
    echo 'You have enough coins to buy the shield!';
} else {
    echo 'You cannot buy the shield.';
}