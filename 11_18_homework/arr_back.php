<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

$reversed = [];

for ($i=count($arr)-1; $i >= 0 ; $i--) 
{ 
    # code...
    if ($i > count($arr) - 1)
    {
        # code...
    break;
    }
    $reversed[]=$arr[$i];
}
print_r($reversed);