<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 08.10.18
 * Time: 13:44
 */

namespace App\Strategy;

class Sorter
{
    private $sorter;

    public function __construct(SorterInterface $sorter) {
        $this->sorter = $sorter;
    }

    public function sort($elements, $method)
    {
        uasort($elements, array($this->sorter, $method));
        return $elements;
    }
}