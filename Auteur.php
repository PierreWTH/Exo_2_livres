<?php

class Auteur{


// Déclaration des propriétés

    private string $_prenom;
    private string $_nom;
    

// Construct

    public function __construct(string $prenom, string $nom)
    {
    $this->_prenom = $prenom;
    $this->_nom = $nom;
    
    }

    // Méthodes

    public function getInfos()
    {
        echo "Le nom de l'auteur est ".$this->_prenom." ".$this->_nom;
    }


    public function __toString()
    {
        return $this->get_prenom() . " " . $this->get_nom();
    }

    // Getter and Setters

    
    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }
}








?>