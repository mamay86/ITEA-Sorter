<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 08.10.18
 * Time: 15:23
 */

namespace App\Strategy;

class NumSorter implements SorterInterface
{
    public function asc($a, $b)
    {
        return $a > $b;
    }

    public function desc($a, $b)
    {
        return $a < $b;
    }

    public function length($a, $b)
    {
        $aLength = strlen((string)$a);
        $bLength = strlen((string)$b);
        return $aLength > $bLength;
    }
}
