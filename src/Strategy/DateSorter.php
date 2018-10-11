<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 08.10.18
 * Time: 15:24
 */

namespace App\Strategy;

class DateSorter implements SorterInterface
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
        $aDate = new \DateTime($a);
        $bDate = new \DateTime($b);
        return $aDate > $bDate;
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
        $aDate = new \DateTime($a);
        $bDate = new \DateTime($b);
        return $aDate < $bDate;
    }

    /**
     * Logic of the length sorting
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function length($a, $b)
    {
        throw new \LogicException(\sprintf('Can\'t use method %s for %s', __METHOD__, __CLASS__));
    }
}
