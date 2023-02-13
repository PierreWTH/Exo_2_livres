<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

    
$auteur1 = new Auteur("Stephen", "King");

$livre1 = new Livre("Ca", 200, 1998, 20, $auteur1);
$livre2 = new Livre("Simetierre", 498, 2007, 15, $auteur1);

$livre1-> afficherBibliographie();
    



?>