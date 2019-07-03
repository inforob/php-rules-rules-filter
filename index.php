<?php

require_once('classes/ContainerRule.php');
require_once('classes/Rule.php');
require_once('interfaces/RuleInterface.php');
require_once('classes/isMoreBigThat.php');
require_once('classes/isLessThat.php');
require_once('classes/isNumeric.php');

use App\Classes\Rule;
use App\Classes\ContainerRule;

use App\Classes\isNumeric;
use App\Classes\isMoreBigThat;
use App\Classes\isLessThat;

$arrayElementsForFiltered = [1,2,3,4,5,'a','b','2',34,12,111];

$rule = new ContainerRule();
$rule->addRule(new isNumeric());


$rule->addRule(new isMoreBigThat(5));
$rule->addRule(new isLessThat(2));

$rule->execRule($arrayElementsForFiltered);
