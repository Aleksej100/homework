<?php

$arr = [1,2,3,4,5,6,7,8,9,10];
$length = count($arr);

for($i=0; $i < $length; $i++) 
{ 
    # code...
    if($arr[$i] % 2 == 0)
    {
        echo $arr[$i];
        echo "\n";
    }

}