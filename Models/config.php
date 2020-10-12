<?php


/*
 *          De adaugat alte personaje cu configurarile
 * 
 * TODO Clasa noua cu armele speciale 
 * 
 * 
 * 
 */

$powerStrike = 10 - rand(0, 100) >= 0 ? 2 : 1;
$defenseShield = 20 - rand(0,100);
$magicShield = 20 - rand(0, 100) >= 0 ? rand(60,90)/2 : rand(60,90);


//Un array cu eroi
return array(
'Ordeus' => [
    'health' => rand(70, 90),
    'strengh' => rand(70, 90) * $powerStrike,
    'defense' => rand(45,55),
    'speed' => rand(70, 90),
    'luck' => (rand(10, 30) - rand(0, 100)) >= 0 ? true : false,
],

//Numele Monstrului    
    
'Monster' => [
    'health' => rand(60, 90),
    'strengh' => intval($magicShield),
    'defense' => rand(40, 60),
    'speed' => rand(40, 60),
    'luck' => (rand(25, 45) - rand(0, 100)) >= 0 ? true : false,
]
);
