<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 08.10.18
 * Time: 15:21
 */

namespace App\Strategy;

interface SorterInterface
{
    public function asc($a, $b);

    public function desc($a, $b);

    public function length($a, $b);
}