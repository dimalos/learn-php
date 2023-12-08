<?php

/**
 * == - Equal <- ===
 * != - Not Equal <- !==
 * >= - Greater than or equal to
 * <= - Less than or equal to
 */

$identicalResult = 2 === 2;
var_dump($identicalResult, 2, 'Spider man');

var_dump($identicalResult);
var_dump(2);
var_dump('Spider man');


var_dump(2 === '2');
var_dump(2 == '2');
var_dump(true == 1);
var_dump(true == '0');
var_dump(3 <= 2);
var_dump(3 < 2 || 3 === 2);