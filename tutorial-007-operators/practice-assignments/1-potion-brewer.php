<?php
/**
 **Potion Brewer: Mixing Ingredients**

You are an alchemist in a fantasy world.

You have four variables: $herb, $flower, $mushroom, and $crystal,
each of which can be true (available) or false (not available).

- You need both $herb and $flower to brew a healing potion.
- You need either $mushroom or $crystal to brew a mana potion.

 **What to Do:**

- If the conditions for the healing potion are met, echo 'Healing potion brewed!'
- If the conditions for the mana potion are met, echo 'Mana potion brewed!'
- If neither potion can be brewed, echo 'Ingredients missing!'
 */

$herb = true;
$flower = false;
$mushroom = true;
$crystal = true;

if ($herb && $flower) {
    echo 'Healing potion brewed!🍔';
} elseif ($mushroom || $crystal) {
    echo 'Mana potion brewed!';
} else {
    echo 'Ingredients missing!';
}