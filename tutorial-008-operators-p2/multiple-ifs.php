<?php

$playerEnergy = 40;
$shieldCharged = false;
$droneAlert = false;


if ($droneAlert) {
    if ($playerEnergy < 100) {
        if ($shieldCharged) {
            echo 'Your personal shield is charged. This will deflect incoming laser shots!<br>';
        } elseif ($playerEnergy > 50 && $droneAlert) {
            echo 'Your shield is uncharged, but you"ll probably survive the incoming attack!<br>';
        } else {
            echo 'You are in danger! Charge your shield as soon as possible!<br>';
        }

        echo 'Your energy is below maximum. Find another energy cell!<br>';
    } else {
        echo 'You have maximum energy level!<br>';
    }

    echo 'Warning! Enemy drone detected in proximity! Take cover or disable it!<br>';
} else {
    echo 'We are safe for now and have some time to recover before the next attack. <br>';
}