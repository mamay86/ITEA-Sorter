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
    public function asc($a, $b)
    {
        $aDate = new \DateTime($a);
        $bDate = new \DateTime($b);
        return $aDate > $bDate;
    }

    public function desc($a, $b)
    {
        $aDate = new \DateTime($a);
        $bDate = new \DateTime($b);
        return $aDate < $bDate;
    }

    public function length($a, $b)
    {
        throw new \LogicException(\sprintf('Can\'t use method %s for %s', __METHOD__, __CLASS__));
    }
}
