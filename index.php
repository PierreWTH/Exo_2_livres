<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

    
$auteur1 = new Auteur("Stephen", "King");
$auteur2 = new Auteur("Jean", "Valjean");

$livre1 = new Livre("Ca", 200, 1998, 20, $auteur1);
$livre2 = new Livre("Simetierre", 498, 2007, 15, $auteur1);
$livre3 = new Livre("Le Fléau", 1187, 1978, 35, $auteur1);
$livre4 = new Livre("Shining", 567, 2019, 30, $auteur1);

$livre4 = new Livre("Patrick Bateman", 1187, 1978, 35, $auteur2);
$livre5 = new Livre("Wolf Wall Street", 567, 2019, 30, $auteur2);

$auteur2-> afficherBibliographie();
    



?>