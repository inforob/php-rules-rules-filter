<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Rules\ContainerRule;

use Rules\Rules\{isNumeric, isMoreBigThat, isLessThat};

final class ContainerRuleTest extends TestCase
{
    
    public function testExecFilter() : void
    {

        $rule = new ContainerRule();

        $elementsForFilter = [1,2,3,4,5,'a','b','2',34,12,111];

        $rule->addRule(new isNumeric());
        $rule->addRule(new isMoreBigThat(5));
        $rule->addRule(new isLessThat(2));

        $rule->execRule($elementsForFilter);

        $this->assertEquals($rule->itemsFiltered(),[2=>3,3=>4]);

    }





}

