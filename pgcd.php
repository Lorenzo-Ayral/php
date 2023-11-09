<?php
    function pgcd(int $a, int $b)
    {
        echo "$a - $b\n";
        if($b ==0) {
            return $a;
        }
        return pgcd($b, $a % $b);
    }

    echo pgcd(8, 12);