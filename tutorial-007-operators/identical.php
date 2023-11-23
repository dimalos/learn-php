<?php

$key = 'Obsidian';
$entranceLock = 'Arcane';

if ($key !== $entranceLock) {
    echo 'You may enter the dungeon';
} else {
    echo 'You have the wrong key';
}