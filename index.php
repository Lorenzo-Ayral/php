<?php

class Fraction
{
    private int $numerator;
    private int $denominator;

    // Méthode magique (__)
    function __construct(int $num, int $den)
    {
        $this->numerator = $num;
        $this->denominator = $den;
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

}

$tiers = new Fraction(1, 3);

$tiers->setDenominator(0);

echo $tiers->division();