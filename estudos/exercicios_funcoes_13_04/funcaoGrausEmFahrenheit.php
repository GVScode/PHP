<?php

$celsius = 30.00;


function celsiusToFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}

echo celsiusToFahrenheit($celsius);