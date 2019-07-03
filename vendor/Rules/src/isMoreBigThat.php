<?php

namespace Rules;

use Rules\Interfaces\RuleInterface;

class isMoreBigThat extends Rule implements RuleInterface
{
    /**
     * value max
     *
     * @var integer
     */
    private $valueMax ;

    /**
     * Create a new Rule instance
     *
     * @param int $valueMax
     */
    public function __construct(int $valueMax)
    {
        $this->valueMax = $valueMax;
    }

    /**
     * filter a group filter from a max value
     *
     * @param  array $arrayElementsForFilter
     *
     * @return array
     */
    public function filter(array $arrayElementsForFilter) : array
    {
        return array_filter($arrayElementsForFilter, function ($e) {
            if ($e < $this->valueMax) {
                return $e;
            }
        });
    }
}
