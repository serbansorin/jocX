// Proiect care a devenit didactic; Proiect care initial am avut 2-3 ore
// Scopul a fost un joc/ o batalie dintre Ordeus si Monster care au anumite caracteristici
// Enuntul nu a fost prea clar/ Health impreuna cu alte caracteristici sunt influentate de noroc.
// Unde nu se leaga este Health, care nu ar trebui sa varieze si totusi enuntul este altul.

// De asemenea totul tre facut in PHP care nu are interactiuni cu clientul ?!

// Sunt clase care le am lasat special pentru ca am vrut ca totusi ele sa aiba la un moment dat un parinte si niste diferente majore
// Momentan sunt la fel si al 2lea motiv este folosirea unei metode statice de a alege jucatorul
// "Un joc care se poate extinde sa aibe sute de jucatori si atunci apelarea claselor direct ar fii o nebunie curata :)))))"

<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

/*Final Print

game::play();
cout>>> Select Player;  Momentan am un singur Hero




*/
// O
$Ordeus = Models\Caracter::select('Ordeus');
$Monster = Models\Caracter::select('Monster');

// Q: random de fiecare data la health? Mai sunt cateva lucruri care nu sunt prea clare.
// health trebuie sa fie static?!
$Ordeus->play();
$Monster->play();




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

