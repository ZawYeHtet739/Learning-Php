<?php


class Math
{

    private $PI = 3.14;

    public function __get($name)
    {
        return $this->PI;

    }
    public function __set($name, $value)
    {
        $this->PI = $value;
    }

}

$obj = new Math;



echo $obj->PI; // Cannot access PI
echo "<br>";
$obj->PI = 12; // Cannot set PI with 3.142
echo "<br>";
echo $obj->PI; // Cannot access PI

