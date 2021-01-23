<?php 
class Mage extends Perso {
    public $magie;
    

    function __construct($magie, $nom, $arme) {
        $this -> magie = $magie;
        parent::__construct($nom, $arme);
        
    }

    public function attaque($cible) {
        parent::attaque();
        $cible -> vie -= $this -> magie;
        
    }
}
?>