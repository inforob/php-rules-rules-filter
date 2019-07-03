<?php

namespace App\Classes;


class ContainerRule {

    private $rules = [];

    private $items = [];

    public function addRule(Rule $rule) : void {
        $this->rules[] = $rule;
    }

    public function execRule( array $elementsForFilter ) : void {

        $this->items = $elementsForFilter;

        foreach($this->rules as $rule) {
            $this->items = $rule->filter($this->items);
        }

        print_r($this->items);
    }
}