<?php

function Fibonacci($number)
{
    if($number == 0)
    {
        return 0;
    }
    elseif($number == 1)
    {
        return 1;
    }
    else
    {
        return (Fibonacci($number - 1) + Fibonacci($number -2));
    }
}

$number = 10;

for ($i=0; $i < $number; $i++) { 
    # code...
    echo Fibonacci($i), ' ';
    echo "\n";
}