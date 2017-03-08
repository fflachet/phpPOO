<?php
//the Personnage object inherit the properties of the abstract class Stats
class Personnage extends Stats {

    //initialisation of our public variables , so we can access it anywhere
    public $race = null;
    public $classe = null;
    // method who will be call at the creation of a new instance of Personnage
    // in the parameters there is a nom, race and classe
    // These parameters are required for the creation of a new Personnage
    public function __construct($nom, $race, $classe) {
        $this->nom = $nom;
        $this->race = $race;
        $this->classe = $classe;
    }
    
    // implementation of attaquer method coming from iClass.php
    public function attaquer() {
        $this->classe->attaquer();
    }
    // implementation of seDeplacer method coming from iRace.php
    public function seDeplacer() {
        $this->race->seDeplacer(2);
    }

    public function attendre() {
        
    }

    public function mourir() {
        
    }

}
