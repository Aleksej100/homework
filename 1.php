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

function makeArray($number){
    $arr = [];

    for ($i=0; $i < $number; $i++) { 
        # code...
        $arr[] = makeArray($i);
    }
    return $arr;
}

makeArray(9);

<?php
/*# testing
$number = 35;
if ($number > 25) {
    # code...
    print($number );
}
echo "\n";

#integer
$variable = 5;
if (is_integer($variable)) {
 print($variable);
}

echo "\n";
# how old are you?
$old = 40;
if ($old < 10) {
    # code...
    print("Baby");
}
elseif (10 < $old and $old < 20) {
    # code...
    print("Teenager");
}
elseif (20 < $old and $old < 50) {
    # code...
    print("Old");
}
echo "\n";
#switch

$day = 6;
switch ($day) {
    case '1':
        # code...
        print("Monday");
        break;
    case '2':
        # code...
        print("Tuesday");
        break;
    case '3':
        # code...
        print("Wednesday");
        break;
    case '4':
        # code...
        print("Thursday");
        break;
    case '5':
        # code...
        print("Friday");
        break;
    case '6':
        # code...
        print("Saturday");
        break;
    case '7':
        # code...
        print("Sunday");
        break;

}

//square
function square($num1)
{
    $square = pow($num1,2);
    return $square;
}

echo square(3);

echo "\n";

//sum
function sum($num2, $num3)
{
    $sum = $num2 + $num3;
    return $sum;
}

echo sum(6,3);

echo "\n";

//funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.
function minus($num4, $num5)
{
    $minus = (($num5 - $num4) / 3);
    return $minus;
}

echo minus(3,9);

echo "\n";

// Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.

function days($daynumber)
{

    switch ($daynumber) {
        case 1:
            # code...
            return("Pirmadienis");
            break;
        case 2:
            # code...
            return("Antradienis");
            break;
        case 3:
            # code...
            return("Treciadenis");
            break;
        case 4:
            # code...
            return("Ketvirtadienis");
            break;
        case 5:
            # code...
            return("Penktadienis");
            break;
        case 6:
            # code...
            return("Sestadienis");
            break;
        case 7:
            # code...
            return("Sekmadienis");
            break;
        default:
            return("Error");
            break;
    }
}

echo days(8);
*/
/*
echo "\n";

//Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().
$arr = array( "a", "b", "c");

var_dump($arr);

echo "\n";

//Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.

$arr5 = array( "a", "b", "c");

for ($i=0; $i <= 3; $i++) { 
    # code...
    echo $arr5[$i];
}


echo "\n";

//Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.

$arr2 = array("a", "b","c", "d");

echo " $arr2[0]  +  $arr2[1], $arr2[2] + $arr2[3]"; 

echo "\n";

// /Sukurkite $arr masyvą su elementais 2, 5, 3, 9.
// Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo.
// Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.

$arr3 = array(2,5,3,9);

$result = (($arr3[0] * $arr3[1]) + ($arr3[2] * $arr3[3]));

echo $result;

echo "\n";
//Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.

$arr4 = array();

for ($i=0; $i <= 5; $i++) { 
    # code...
   $arr4[$i] = $i;
}

for ($i=0; $i <= 5; $i++) { 
    # code...
    echo $arr4[$i];
    echo "\n";
}
*/
echo "\n";