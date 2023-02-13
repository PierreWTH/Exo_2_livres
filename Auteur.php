<?php

class Auteur{


// Déclaration des propriétés

    private string $_prenom;
    private string $_nom;
    private array $_livres;

// Construct

    public function __construct(string $prenom, string $nom)
    {
    $this->_prenom = $prenom;
    $this->_nom = $nom;
    $this->_livres = [];
    }

    // Méthodes

        // Ajouter livre

    public function addLivre(Livre $livre)
    {
        $this->_livres[] = $livre;
    }

        // Information auteur

    public function infoAuteur()
    {
        echo "Le nom de l'auteur est " . $this->_prenom . " " . $this->_nom . "<br>";
    }

        // Afficher Bibliographie

    public function afficherBibliographie()
    {
        echo "<h2>Livres de " . $this->_prenom . " " . $this->_nom . "</h2>";
        foreach ($this->_livres as $value) {
            echo $value->getBookInfo() . "<br>";
        }
    }

        // To string

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