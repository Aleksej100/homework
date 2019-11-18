<?php

$arr = [1,2,3,4,5,6,7,8,9,10];
$length = count($arr);

for($i=0; $i < $length; $i+= 2) 
{ 
    # code...
        echo $arr[$i];
        echo "\n";
}
