<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 08.10.18
 * Time: 15:55
 */

namespace App\Strategy;

class StringSorter implements SorterInterface
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
        $aLength = strlen($a);
        $bLength = strlen($b);
        return $aLength > $bLength;
    }
}
