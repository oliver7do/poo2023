<?php
class Voiture
{
    // attributs du gateau

    public $marque;
    public $couleur;
    public $model;

    // les methodes du gateau
    public function rouler()
    {
        echo "Je roule<br>";
    }
    public function accelerer()
    {
        echo "Je accelerer<br>";
    }
    public function freiner()
    {
        echo "Je freiner<br>";
    }
}

//

$voiture1 = new Voiture();
$voiture1->marque = "peugeot";
$voiture1->model = 308;
$voiture1->couleur = "noire";

// on fait rouler la voiture
$voiture1->rouler();
// on fait accelerer la voiture
$voiture1->accelerer();
// on fait freiner la voiture
$voiture1->freiner();


// class Voiture avec constructeur
class VoitureAvecConstructeur
{
    // attributs
    public $marque;
    public $modele;
    public $couleur;
    // constructeur
    public function __construct($brand, $model, $color)
    {
        $this->marque = $brand;
        $this->modele = $model;
        $this->couleur = $color;
    }
    public function rouler()
    {
        echo "Je roule<br>";
    }
    public function accelerer()
    {
        echo "Je accelerer<br>";
    }
    public function freiner()
    {
        echo "Je freiner<br>";
    }
}
// creer une voiture
$voiture2 = new VoitureAvecConstructeur("Citroen", "C4", "rouge");
$voiture2->rouler();
