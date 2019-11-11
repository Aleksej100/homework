<?php

//"Nupieškite" tokio tipo piramidę:
//1
//22
//333
//4444
//55555
//666666
//7777777
//88888888
//999999999

for ($i=0; $i <= 9; $i++) { 
    # code...
    for ($y=0; $y < $i; $y++) { 
        # code...
        echo $i;
    }
    echo "\n";
}
echo "\n";
//Parašykite funkciją kuri unserscore_case konvertuoja i camelCase;





echo "\n";
//Parašykite funkciją kuri priima kaip argumentą/paramėtrą "2014-12-31" formato datą ir grąžina zodiako ženklą.

function zodiako($data){
    $day = str_replace("-","",substr($data,5));
    $zodiak = array('start' => array('0120','0219','0321','0421','0521','0622','0723','0823','0923','1024','1123','1222','0101'),
                'finish' => array('0218','0320','0420','0520','0621','0722','0822','0922','1023','1122','1221','1231','0119'),
'zn' => array('Vandenis','Žuvys','Avinas','Tauras (Jautis)','Dvyniai','Vėžys','Liūtas','Mergelė','Svarstyklės','Skorpionas','Šaulys','Ožiaragis'/*,'Ožiaragis'*/));
    $i = 0;
    while (empty($znak) && ($i < 13)){
        $znak = (($zodiak['start'][$i] <= $day) && ($zodiak['finish'][$i] >= $day)) ? $zodiak['zn'][$i] : null;
        ++$i;
    } return $znak;
    }

echo zodiako("2014-12-31");

echo "\n";
//Parašykite funkciją kuri priima kaip argumentą/paramėtrą skaičių ir grąžina panašų masyvą.
// Pvz 4 --> [1, [2], [[3]], [[[4]]] ], 5 --> [1, [2], [[3]], [[[4]]], [[[[5]]]] ].

