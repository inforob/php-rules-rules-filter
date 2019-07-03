<?php

namespace Rules;

use Rules\Interfaces\RuleInterface;

class isLessThat extends Rule implements RuleInterface
{
    /**
     * value min
     *
     * @var integer
     */
    private $valueMin ;
    
    /**
     * Create a new Rule instance
     *
     * @param int $valueMin
     */
    public function __construct(int $valueMin)
    {
        $this->valueMin = $valueMin;
    }

    /**
     * filter a group filter from a min value
     *
     * @param  array $arrayElementsForFilter
     *
     * @return array
     */
    public function filter(array $arrayElementsForFilter) : array
    {
        return array_filter($arrayElementsForFilter, function ($e) {
            if ($e > $this->valueMin) {
                return $e;
            }
        });
    }
}
