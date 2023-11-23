<?php

$stoneBridgeSafe = false;
$woodenBridgeSafe = false;

if ($stoneBridgeSafe || $woodenBridgeSafe) {
    echo 'You can cross the river!';
} else {
    echo 'You need to find another path!';
}