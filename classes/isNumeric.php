<?php

namespace App\Classes;

use App\Interfaces\RuleInterface;
use App\Classes\Rule;

class isNumeric extends Rule implements RuleInterface {

    public function filter(array $arrayElements) : array {
        return array_filter( $arrayElements , function($e) { return ( is_integer($e) ) ? $e : null ; });
    }
}