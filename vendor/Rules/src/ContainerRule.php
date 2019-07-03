<?php

namespace Rules;

class ContainerRule
{
    private $rules = [];

    private $items = [];

    public function addRule(Rule $rule) : void
    {
        $this->rules[] = $rule;
    }

    /**
     * execRule
     *
     * run each rule and aply the filter method
     * to each item from array origin
     *
     *
     * @param array $elementsForFilter item for filter
     *
     * @return void
     */

    public function execRule(array $elementsForFilter) : void
    {
        $this->items = $elementsForFilter;

        foreach ($this->rules as $rule) {
            $this->items = $rule->filter($this->items);
        }

        print_r($this->items);
    }

    /**
     * itemsFiltered
     *
     * show all items filtered from
     * rules applied
     *
     * @return array
     */
    public function itemsFiltered() : array
    {
        return $this->items;
    }
}
