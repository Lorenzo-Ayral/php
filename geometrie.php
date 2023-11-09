<?php

class Point {
    public float $x;
    public float $y;

    function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    function __toString()
    {
        return "Coordonnees ($this->x , $this->y)\n";
    }
}

interface IForme {
    function area();
    function perimeter();
}

interface ITransformation {
    function rotation(int $angle);
    function translation(float $distance);
}

trait MessageTrait {
    function display() {
        return "Je suis une forme quelconque";
    }

    function displayData() {
        return "J'ai plein de donnees a vous montrer";
    }
}

class Cercle implements IForme, ITransformation {
    public Point $centre;
    public float $rayon;

    function __construct(Point $centre, float $rayon)
    {
        $this->centre = $centre;
        $this->rayon = $rayon;
    }

    function __toString()
    {
        return "Cercle de rayon: $this->rayon\n";
    }

    function area() {
        return pi() * $this->rayon ** 2;
    }

    function perimeter() {
        return 2 * pi() * $this->rayon;
    }

    function rotation(int $angle)
    {
        return "Je subis une rotation de $angle";
    }

    function translation(float $distance)
    {
        return "Je subis une translation de $distance";
    }
}

class Rectangle implements IForme {
    use MessageTrait;

    public Point $centre;
    public float $longueur;
    public float $largeur;

    function __construct(Point $centre, float $longueur, float $largeur)
    {
        $this->centre = $centre;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    function __toString()
    {
        return "Rectangle de cote: $this->longueur et $this->largeur\n";
    }

    function area() {
        return $this->longueur * $this->largeur;
    }

    function perimeter() {
        return 2 * ($this->longueur + $this->largeur);
    }
}

$centre = new Point(4, 5);
$cercle = new Cercle($centre, 5);
$rectangle = new Rectangle(new Point(2, -5), 12, 6);

echo $centre;
echo $cercle->area() . "\n";
echo $rectangle->area() . "\n";
