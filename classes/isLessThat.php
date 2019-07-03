<?php

namespace App\Classes;

use App\Interfaces\RuleInterface;

class isLessThat implements RuleInterface {

    private $valueMax ;
    
    public function __construct(int $valueMax) {
        $this->valueMax = $valueMax;
    }
    public function filter(array $arrayElements) : array {
        return array_filter( $arrayElements, function($e) { if( $e < $this->valueMax) return $e; });
    }
}