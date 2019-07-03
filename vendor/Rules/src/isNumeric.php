<?php

namespace Rules;

use Rules\Interfaces\RuleInterface;



class isNumeric extends Rule implements RuleInterface
{
    /**
    * filter only integer items
    *
    * @param  array $arrayElementsForFilter
    *
    * @return array
    */
    public function filter(array $arrayElementsForFilter) : array
    {
        return array_filter($arrayElementsForFilter, function ($e) {
            return (is_integer($e)) ? $e : null ;
        });
    }
}
