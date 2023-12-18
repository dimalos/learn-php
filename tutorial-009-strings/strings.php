<?php

$firstName = 'Spider';
$lastName = 'Man';
$fullName = $firstName . ' ' . $lastName;
$fullNameDQ = "I'm {$firstName} $lastName";
$escaping = 'I"m';

/**
 * \n
 * \r
 */

var_dump($fullName, $fullNameDQ);