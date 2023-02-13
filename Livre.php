<?php

class Livre{

// Déclaration des propriétés

    private string $_titre;
    private int $_nombrepages;
    private int $_annee;
    private int $_prix;
    private Auteur $_auteur;
    private array $_tableaulivre;

// Construct

    public function __construct(string $titre, int $mnombrepages, int $annee, int $prix, Auteur $auteur)
    {
    $this->_titre = $titre;
    $this->_nombrepages = $mnombrepages;
    $this->_annee = $annee;
    $this->_prix = $prix;
    $this->_auteur = $auteur;
    $this-> _tableaulivre = [];
    }

// Méthodes



public function addLivres(Livre $livre)
{
    $this->_tableaulivre[] = $livre;

}

    public function afficherBibliographie()
    {
        echo "<h2> Livres de " .$this->_auteur."</h2>";
        echo $this->_titre. " (" .$this->_annee.") : " .$this->_nombrepages." pages / " .$this->_prix." euros. ";

    }

    
}
   


?>