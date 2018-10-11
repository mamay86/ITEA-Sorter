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
    /**
     * Logic of the asc sorting
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function asc($a, $b) : int
    {
        return $a > $b;
    }

    /**
     * Logic of the desc sorting
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function desc($a, $b) : int
    {
        return $a < $b;
    }

    /**
     * Logic of the length sorting
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function length($a, $b) : int
    {
        $aLength = strlen((string)$a);
        $bLength = strlen((string)$b);
        return $aLength > $bLength;
    }
}
