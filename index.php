<?php
//import different files
require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");

// creation of a new instance of the Personnage object
// it takes in parameters a nom, 
// and a a new instance of the Orc() et Guerrier() objects
$perso1 = new Personnage("Bob", new Orc(), new Guerrier());

// use of accessors for getting the propriety of the new Personnage
echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();

// call of our interfaces that are implemented in the classe and race 
$perso1->attaquer();
$perso1->seDeplacer();

$perso2 = new Personnage("Bill", new Orc(), new Archer());

$perso2->attaquer();
