<?php
class Moule
{
    // attributs du gateau
    public $gout;
    public $texture;

    // les methodes du gateau
    public function nourrir()
    {
        echo "je suis un gateau au " . $this->gout . " " . $this->texture . " je vous regale <br>";
    }
}
// creer un gateau au chocolat fondant
$gateauAuChocolat = new Moule(); // instancier un objet
$gateauAuChocolat->gout = "chocolat";
$gateauAuChocolat->texture = "fondant";
$gateauAuChocolat->nourrir();

$gateauAuCitron = new Moule(); // instancier un objet
$gateauAuCitron->gout = "citron";
$gateauAuCitron->texture = "fondant";
$gateauAuCitron->nourrir();

// --------

class Voiture{
    // attributs du gateau
    public $marque;
    public $couleur;
    public $model;

    // les methodes du gateau
    public function rouler(){
        echo "Je roule<br>";
    }
    public function accelerer(){
        echo "Je roule<br>";
    }
    public function freiner(){
        echo "Je roule<br>";
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
class VoitureAvecConstructeur{
    // attributs
    public $marque;
    public $modele;
    public $couleur;
    // constructeur
    public  function __construct($brand, $model, $color){
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
        echo "Je roule<br>";
    }
    public function freiner()
    {
        echo "Je roule<br>";
    }
    
}
// creer une voiture
$voiture2 = new VoitureAvecConstructeur("Citroen", "C4", "rouge");
$voiture2->rouler();