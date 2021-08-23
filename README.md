# php-rules-rules-filter
a rules repository

You can create new Rules for your array filters as follow:

```php
declare(strict_types = 1);

namespace App;

class ContainerRulesArrayMap
{
    private $rules = [];

    private $items = [];

    public function __construct(array $tasks)
    {
        $this->items = $tasks;
    }

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
     * @return void
     */

    public function execRule() : void
    {
        foreach ($this->rules as $rule) {
            $this->items = $rule->map($this->items);
        }
    }
```
