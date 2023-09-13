<?php
// classe Humain qui sera classe mere de Magicien et Patissier
class Humain{
  // attributs commune aux classes filles
  protected $nom;
  protected $prenom;

  // le constructeur
  public function __construct($nom, $prenom){
    $this->nom = $nom;
    $this->prenom = $prenom;
  }
  // methodes commune aux classes filles
  public function dormir(){
    echo "Je fais dodo";
  }
}

// classe magicien qui etend la classe Humain du coup magicien va herite des proprietes et methodes de Humain
class Magicien extends Humain{
    public $baguette;

    public function __construct($nom, $prenom, $baguette){
        // $this->nom = $nom; -- 1 methode
        // $this->prenom = $prenom; -- 1 methode
         parent::__construct($nom, $prenom); // -- 2 methode
        $this->baguette = $baguette;
    }
    public function faireUnTouDeMagie(){
        echo "Bonjour c'est". $this->prenom. " ". $this->nom." j'ai la". $this->baguette. "Waouh voici un petit lapin sorti du chapeau";
    }
}
// classe Patissier
class Patissier extends Humain{
    public $batteur = "electrique";
    // methode propre a la patissiere
    public function faireDeBonGateau(){
        echo "Bonjour C'est ".$this->prenom. $this->nom. " J'aun un super batteur ". $this->batteur." Miam voici un delicieux gateau";
    }
}

// instancier un magicien
$magic = new Magicien("Le magicien", "Julien", "le magicien", "baguete de sureau");
$magic->faireUnTouDeMagie();
echo "<br>";
// creer une patissiere
$patissiere = new Patissier(" CHERIE", " Nawal");
$patissiere->faireDeBonGateau();