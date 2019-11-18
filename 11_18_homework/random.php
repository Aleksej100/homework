<?php
$a = 1;
for ($i=0; $i < $a; $i++) { 
    # code...
    $b = rand(1,6);
    echo $b;
    echo "\n";
    if($b == 5 || $b ==6)
    {
    break;
    }
    else
    {
        $a++;
    }
}
// function ran_dom($min, $max)
// {
// $b = 0;
    // while($b != 5 || $b !=6)
    // {
    //     $b = rand($min,$max);
    //     return $b;
    //     return "\n";
    //     if($b == 5 || $b ==6)
    //     {
    //     break;
    //     }

    // }
// }

// while($b != 5 || $b !=6)
// {
//     echo ran_dom(1,6);
//     if($b == 5 || $b ==6)
//     {
//     break;
//     }
// }