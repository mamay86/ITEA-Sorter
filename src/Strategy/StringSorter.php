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
        $aLength = strlen($a);
        $bLength = strlen($b);
        return $aLength > $bLength;
    }
}
