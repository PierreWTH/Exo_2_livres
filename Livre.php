<?php

class Livre{

// Déclaration des propriétés

    private string $_titre;
    private int $_nombrepages;
    private int $_annee;
    private int $_prix;
    private Auteur $_auteur;

// Construct

    public function __construct(string $titre, int $mnombrepages, int $annee, int $prix, Auteur $auteur)
    {
    $this->_titre = $titre;
    $this->_nombrepages = $mnombrepages;
    $this->_annee = $annee;
    $this->_prix = $prix;
    $this->_auteur = $auteur;
    $auteur->addLivre($this);
    }

// Méthodes

public function getBookInfo()
{
    return $this->_titre . " (" . $this->_annee . ") : " . $this->_nombrepages . " pages / " . $this->_prix . "€";
}
   
}

?>