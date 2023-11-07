<?php

include("autoLoad.php");

use Library\Helper\Calculator;
use Library\Helper\Math;

$calc = new Calculator;
$math = new Math;

echo $calc->add([1, 2]);
echo "<br>";
echo $math->add(3);