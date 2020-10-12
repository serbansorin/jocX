<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

//AM FOLOSIT STATIC METHOD -->> CARACTER::SELECT
//
//$heroes = include __DIR__ . '/Models/config.php';
//
//
//$Ordeus = new Models\Ordeus($heroes['Ordeus']);
//$Monster = new Models\Monster($heroes['Monster']);

$Ordeus = Models\Caracter::select('Ordeus');
$Monster = Models\Caracter::select('Monster');

//random de fiecare data la health??? Mai sunt cateva lucruri care nu sunt prea clare.
// health trebuie sa fie static?!
$Ordeus->play();
$Monster->play();


/*
 * 
 * 
 * TODO PUT IT IN A CLASS
 */
//
//DACA AS FII ADAUGAT UN BUTON, AM SCRIS CU SESSION 
//
//Nu trebuia neaparat sa folosesc session;
$damageO = 0;
$damageM = 0;
//$damageO =& $_SESSION['damageMonster'];
//$damageM =& $_SESSION['damageOrdeus'];

for ($x = 0; $x < 20; $x++) {
   
    if ($Ordeus->speed < $Monster->speed && $x === 0) {

        $damageM += $Monster->defense - $Ordeus->strengh;
        $x = 1;
    }
    
    #roll the dice every time;
    
    $Ordeus->play();
    $Monster->play();

    switch ($x % 2) {
        //Loveste eroul
        case 0:

            $damageM += ($Ordeus->strengh - $Monster->defense);
            $monsterHealth = $Monster->health - $damageM;
            echo "Monstrul are Health $monsterHealth dupa ce a incasat $damageM puncte.</br>";


            break;
        //loveste monstrul
        case 1:

            $damageO += ($Monster->strengh - $Ordeus->defense);
            $ordeusHealth = $Ordeus->health - $damageO;
            echo "Ordeus are Health $ordeusHealth dupa ce a incasat $damageO puncte.</br>";

            break;

        default:
            break;
    }
    If ($Monster->health <= $damageM) {
        session_destroy();
        exit('<h2>A castigat Ordeus');
    }
    If ($Ordeus->health <= $damageO) {
        session_destroy();
        exit('<h2>A castigat Monstrul');
    }
}
echo "<h1> Amandoi sunt epuizati au trecut 20 de lovituri";
session_destroy();
exit;

