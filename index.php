<?php
//TRACCIA1

// $numero = 75;
// $numero2 = 3.5;
// $testo = "Ciao";
// $boolean = true;

//var_dump($numero . " " . $numero2 . " " . $testo . " " . $boolean);

// const NUMERO = 75;
// const NUMERO2 = 3.5;
// const TESTO = "Ciao";
// const BOOLEAN1 = true;


//TRACCIA2

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = 'hai'; //si poteva anche rivalorizzare con $text6 = $text2
// $text7 = 'bevuto';
// $text8 = "tutto";

// var_dump($text1 . " " .  $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8);


//TRACCIA3


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
    'oscura',
    'era',
    89,
    [
    'mezzo',
    [
    'cammin',
    'Nel',
    [
    'selva',
    'la',
    [
    'via',
    'una',
    true,
    ]
    ],
    ]
    ],
    'ritrovai',
    'per'
    ],
    'diritta'
    ];
    $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
    ]
    ];
$di = "di";



//var_dump($words1);
 $results = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $di . " " . $words1[6][3][1][0] . " " . $di . " " . $words2["elemento2"] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . "," . $words2[
    "elemento3"][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2["elemento3"][1];
 echo $results;

//print_r($words1);
//print_r($words2);
