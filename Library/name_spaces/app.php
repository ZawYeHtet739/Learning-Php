<?php

include("Math.php");

use Library\name_spaces\Math;

$math1 = new Math;
$math2 = new Math;

echo $math1->add(1, 2);
echo "<br>";
echo $math2->add(2, 2);
