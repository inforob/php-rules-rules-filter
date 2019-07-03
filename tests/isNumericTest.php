<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class isNumericTest extends TestCase
{
    public function testIsInteger() : void
    {
        $inputElements = [1,2,3,4,5];

        $outputElements = array_filter($inputElements, function ($e) {
            return (is_integer($e)) ? $e : null ;
        });

        $this->assertEquals($inputElements,$outputElements);
    }

    public function testFilterStrings() : void
    {
        $inputElements = [1,2,3,4,'a'];

        $outputElements = array_filter($inputElements, function ($e) {
            return (is_integer($e)) ? $e : null ;
        });

        $this->assertEquals($outputElements,[1,2,3,4]);
    }

}

