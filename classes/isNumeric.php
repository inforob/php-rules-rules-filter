<?php

namespace App\Classes;

use App\Interfaces\RuleInterface;
use App\Classes\Rule;

class isNumeric extends Rule implements RuleInterface
{
    /**
    * filter only integer items
    *
    * @param  array $arrayElementsForFilter
    *
    * @return array
    */
    public function filter(array $arrayElements) : array
    {
        return array_filter($arrayElements, function ($e) {
            return (is_integer($e)) ? $e : null ;
        });
    }
}
