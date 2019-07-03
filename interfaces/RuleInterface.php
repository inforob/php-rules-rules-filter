<?php

namespace App\Interfaces;

interface RuleInterface 
{
    // filter some items from a array
    function filter(array $arrayElements) : array ;
}