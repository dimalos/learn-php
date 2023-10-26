<?php
/**
 **Wizard's Challenge: Spell Casting**

 **Description:** You are a wizard apprentice.
You have a variable $mana (a number) and two booleans, $hasSpellbook and $fullMoon.
- You need at least 50 $mana and the $hasSpellbook to cast a basic spell.
- If it's a $fullMoon, even with lower mana (let's say 30), you can still cast the basic spell with the spellbook.

 **What to Do:**
- If the conditions for casting the basic spell are met, echo 'Basic spell casted!'
- If you have more than 70 $mana and it's a $fullMoon, echo 'Powerful spell unleashed!'
- Otherwise, echo 'Failed to cast the spell.'
 */

$mana = 50;
$hasSpellbook = true;
$fullMoon = false;

if ($mana > 70 && $fullMoon) {
    echo 'Powerful spell unleashed!';
} elseif ($hasSpellbook && ($mana >= 50 || ($mana >= 30 && $fullMoon))) {
    echo 'Basic spell casted!';
} else {
    echo 'Failed to cast the spell.';
}

?>