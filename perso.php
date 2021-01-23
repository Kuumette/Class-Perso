<?php
class perso {
    
  
    public $vie = 100;
    // public $atk = 20;
    public $nom;
    public $arme;

    //constructeur 
    public function __construct($nom, $arme) {
        
        $this -> nom = $nom;
        $this -> arme = $arme;
    }

    //fonction regenerer 
    public function regenerer($vie) {
        //si vie = a null alor il a 100 de vie et pas de regen
        if (is_null($vie)) {
            $this -> vie = 100;
        //sinon regenn le nombre choisi dans index (regenerer(5))
        } else {
            $this -> vie += $vie;
        }
        echo 'Le perso a etait regen de ' .$vie. '<br>';
        
    }
    //fonction mort
    public function mort() {
     
        if ($this -> vie <= 0) {
            return true;
        } else {
            return false;
        }
    }

    //fonction attaque
    public function attaque($cible) {
        //la cible resois l'attque defini plus haut -20 de vie
        $cible -> vie -= $this -> arme;
        // echo 'les degat son de ' .$this -> arme.'pts';
        echo "<br>";
        // var_dump($cible);
    }

    public function changeArme($nouvelleArme, $nomArme) {
        
        $this -> arme = $nouvelleArme;
        // var_dump($nouvelleArme);
        echo 'le joueur a changer son arme pour ' . $nomArme. '<br>';
    }

   
    
}

?>