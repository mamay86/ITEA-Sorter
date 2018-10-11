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

    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * Sorting element by method
     *
     * @param array $elements
     * @param $method
     * @return array
     */
    public function sort(array $elements, $method) :array
    {
        uasort($elements, array($this->sorter, $method));
        return $elements;
    }
}
