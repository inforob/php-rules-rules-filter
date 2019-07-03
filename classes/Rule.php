<?php

namespace App\Classes;


class Rule {


    private $rules = [];

    private $items = [];

    public function addRule(App\Interfaces\RuleInterface $rule) : void {
        $this->rules[] = $rule;
    }

    public function execRule( array $elementsForFilter ) : array {

        $this->items = $elementsForFilter;

        foreach($this->rules as $rule) {
            $this->items = $rule->filter($this->items);
        }

        print_r($this->items);
    }
}