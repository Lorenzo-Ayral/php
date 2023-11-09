<?php

class Fraction
{
    private int $numerator;
    private int $denominator;

    // Méthode magique (__)
    function __construct(int $num, int $den)
    {
        $this->setNumerator($num);
        $this->setDenominator($den);
    }

    function division()
    {
        return $this->numerator / $this->denominator;
    }

    function setDenominator(int $value)
    {
        if($value == 0) {
            throw new Exception("Le dénominateur ne peut pas être égal à 0");
        }
            $this->denominator = $value;
    }

    function setNumerator(int $value)
    {
        $this->numerator = $value;
    }

    function getDenominator()
    {
        return $this->denominator;
    }

    function getNumerator()
    {
        return $this->numerator;
    }

    function addition(Fraction $fraction)
    {
        $num = $this->numerator * $fraction->getDenominator() + $fraction->getNumerator() * $this->denominator;
        $den = $this->denominator * $fraction->getDenominator();

        return new Fraction($num, $den);
    }

    function __toString()
    {
        return "[$this->numerator / $this->denominator]\n";
    }
}

$tiers = new Fraction(1, 3);
$quart = new Fraction(1, 4);

$fraction = $tiers->addition($quart);

echo $tiers;
echo $quart;
echo $fraction;