<?php
require 'perso.php';
require 'arme.php';
require 'Mage.class.php';
//declaration des armes 
$hache = new arme("hache", 20);
$epee = new arme("epee", 10);
$dague = new arme("dague", 30);
$baguette = new arme("baguette", 40);

$inventaireArme = array($hache, $epee, $dague, $baguette);

$kuumette = new Mage("Brulure", "Kuumette", "");
var_dump($kuumette);

//nouveau perso "merlin"
$merlin = new perso("Merlin", $dague -> armeDegat);

//nouveau perso "harry"
$harry = new perso("Harry", $dague -> armeDegat);

$boucle = true;
while ($boucle) {
    //merlin qui attaque harry
    $merlin -> attaque($harry);

    // changement d'arme aleatoire
    $indexAleatoire = array_rand($inventaireArme, 1);
    $armeAleatoire = $inventaireArme[$indexAleatoire];
    $merlin -> changeArme($armeAleatoire -> armeDegat, $armeAleatoire -> armeNom);
    
    echo 'merlin vien d\'ataquer est harry a '.$harry -> vie. 'pts de vie';
    echo '<br>';
    
    if($harry -> vie <= 0) {
        $boucle = false;
        echo 'Harry est dead <br>';
    }

    $harry -> regenerer(rand(5, 20));
    
    //harry qui attaque merlin dans une condition si
    if ($boucle) {
        $harry -> attaque($merlin);
        echo 'harry vien d\'ataquer est merlin a '.$merlin -> vie. 'pts de vie';
        echo '<br>';
    }

    // changement d'arme aleatoire
    $indexAleatoire = array_rand($inventaireArme, 1);
    $armeAleatoire = $inventaireArme[$indexAleatoire];
    $harry -> changeArme($armeAleatoire -> armeDegat, $armeAleatoire -> armeNom);
   
    //si merlin a 0 de vie alors sa retourne false
    if($merlin -> vie <= 0) {
        $boucle = false;
        echo 'Merlin est dead';
    }
    $merlin -> regenerer(rand(5, 20));
}
?>