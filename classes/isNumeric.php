<?php

namespace App\Classes;

use App\Interfaces\RuleInterface;

class isNumeric implements RuleInterface {

    public function filter(array $arrayElements) : array {
        return array_filter( $arrayElements , function($e) { return ( is_integer($e) ) ? $e : null ; });
    }
}