<?php

require __DIR__ . '/vendor/autoload.php';


use Rules\ContainerRule;

use Rules\Rules\isNumeric;
use Rules\Rules\isMoreBigThat;
use Rules\Rules\isLessThat;

$arrayElementsForFiltered = [1,2,3,4,5,'a','b','2',34,12,111];

$rule = new ContainerRule();
$rule->addRule(new isNumeric());


$rule->addRule(new isMoreBigThat(5));
$rule->addRule(new isLessThat(2));

$rule->execRule($arrayElementsForFiltered);
