<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class isMoreBigThatTest extends TestCase
{

    public function testIsMoreBig() : void
    {
        $inputElements = [1,2,3,4,5];

        $valueMax = 4;

        $outputElements = array_filter($inputElements, function ($e) use ($valueMax) {
            if ($e < $valueMax) {
                return $e;
            }
        });

        $this->assertEquals($outputElements,[1,2,3]);
    }

    public function testCountTotalMinors() : void
    {
        $inputElements = [1,2,3,4,5,9,1.2,10];

        $valueMax = 5;

        $outputElements = array_filter($inputElements, function ($e) use ($valueMax) {
            if ($e < $valueMax) {
                return $e;
            }
        });

        $this->assertCount(5, $outputElements);
    }



}

