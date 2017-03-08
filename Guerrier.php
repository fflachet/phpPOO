<?php

// the Guerrier object inherit the Stats properties and implements the iClass interface
class Guerrier extends Stats implements iClasse {

    //definit le nom de la classe lors de la creation d'une nouvelle instance
    public function __construct() {
        $this->nom = "Guerrier";
    }
    // l'implementation de l'interface iClass nous permet d'appeler notre methode attaquer 
    public function attaquer() {
        echo " attaque";
    }

}
