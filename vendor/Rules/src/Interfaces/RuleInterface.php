<?php

namespace Rules\Interfaces;

interface RuleInterface
{
    // filter some items from a array
    public function filter(array $arrayElements) : array ;
}
