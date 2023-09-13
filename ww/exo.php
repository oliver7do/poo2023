<?php

/**
 * creer une classe abstraite FormeGeometrique
 * avec les attribut suivants:
 * 1) Surface
 * 2) perimetre
 * 
 * creer la classe Rectangle fille de FormeGeometrique avec les attributs suivant:
 * 1) longueur
 * 2) largeur
 * et les methodes calculerSurface et calculerPerimetre
 * 
 * creer la classe Cercle fille de FormeGeometrique avec les proprietes suivantes:
 * 1) rayon
 * et les methodes calculerSurface et calculerPerimetre
 */

// Classe abstraite FormeGeometrique
abstract class FormeGeometrique
{
    protected $surface;
    protected $perimetre;

    public function __construct($surface, $perimetre)
    {
        $this->surface = $surface;
        $this->perimetre = $perimetre;
    }
}

// Classe Rectangle fille de FormeGeometrique
class Rectangle extends FormeGeometrique
{
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur, $surface, $perimetre)
    {
        $this->longueur = $longueur;
        // $this->surface = $surface;
        // $this->perimetre = $perimetre;
        parent::__construct($surface, $perimetre);
        $this->largeur = $largeur;
    }

    public function calculerSurface()
    {
        $this->surface = $this->longueur * $this->largeur;
        return $this->surface;
    }

    public function calculerPerimetre()
    {
        $this->perimetre = 2 * ($this->longueur + $this->largeur);
        return $this->perimetre;
    }
}

// Classe Cercle fille de FormeGeometrique
class Cercle extends FormeGeometrique
{
    private $rayon;

    public function __construct($rayon,$surface, $perimetre)
    {
        $this->rayon = $rayon;
        parent::__construct($surface, $perimetre);
    }

    public function calculerSurface()
    {
        $this->surface = pi() * pow($this->rayon, 2);
        return $this->surface;
    }

    public function calculerPerimetre()
    {
        $this->perimetre = 2 * pi() * $this->rayon;
        return $this->perimetre;
    }
}

// Exemple d'utilisation
$rectangle = new Rectangle(5, 3, 0, 0);
echo "Rectangle - Surface : " . $rectangle->calculerSurface() . ", Périmètre : " . $rectangle->calculerPerimetre() . "\n";

$cercle = new Cercle(4,0,0);
echo "Cercle - Surface : " . $cercle->calculerSurface() . ", Périmètre : " . $cercle->calculerPerimetre() . "\n";
