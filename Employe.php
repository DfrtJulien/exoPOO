<?php

class Employe 
{   
    private string $nom;
    private string $poste;
    private float $salaire;


    public function __construct(string $nom, string $poste, float $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString() : string
    {
        return "Monsieur $this->nom étant $this->poste a un salaire de : $this->salaire €";
    }

    public function __clone()
    {
        $this->salaire *= 1.10;
    }

    public function setNom(string $nom) : static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setPoste(string $poste) : static 
    {
        $this->poste = $poste;
        return $this;
    }

    public function getPoste(){
        return $this->poste;
    }

    public function setsalaire(string $salaire) : static 
    {
        $this->salaire = $salaire;
        return $this;
    }

    public function getsalaire(){
	return $this->salaire;
    }
}

$employe1 = new Employe("Julien De Freitas", "Presidente da República", 5000);

$employe2 = clone $employe1;


$employe1 = strval($employe1);
echo "<p>$employe1<p>";

$employe2 = strval($employe2);
echo "<p>$employe2<p>";