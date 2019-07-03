<?php

namespace App\Classes;

use App\Interfaces\RuleInterface;

class isLessThat extends Rule implements RuleInterface {

    private $valueMin ;
    
    public function __construct(int $valueMin) {
        $this->valueMin = $valueMin;
    }
    public function filter(array $arrayElements) : array {
        return array_filter( $arrayElements, function($e) { if( $e > $this->valueMin) return $e; });
    }
}