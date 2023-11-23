<?php
/**
 **Castle Gatekeeper: Granting Entry**

You are the guardian of a magical castle.

There are three variables: $password, $royalSeal, and $nightTime. 
The $password can be a string, while $royalSeal and $nightTime are booleans.

- Anyone with the correct $password ("Castle Lord") can enter during the day.
- If it's $nightTime, even with the correct password, they need to have the $royalSeal as well.

 **What to Do:**
- If it's daytime and the password is correct, echo 'Welcome to the castle!'
- If it's nighttime, they have the password and the royal seal, echo 'Welcome, noble guest!'
- Otherwise, echo 'Entry denied!'
 */
$password = 'Castle Lord';
$royalSeal = true;
$nightTime = true;

if ($password === 'Castle Lord' && !$nightTime) {
    echo 'Welcome to the castle!';
} elseif ($nightTime && $password === 'Castle Lord' && $royalSeal) {
    echo 'Welcome, noble guest!';
} else {
    echo 'Entry denied!';
}

?>