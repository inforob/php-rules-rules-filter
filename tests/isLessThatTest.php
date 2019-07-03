<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class isLessThatTest extends TestCase
{

    public function testIsLess() : void
    {
        $inputElements = [1,2,3,4,5];

        $valueMin = 3;

        $outputElements = array_filter($inputElements, function ($e) use ($valueMin) {
            if ($e > $valueMin) {
                return $e;
            }
        });

        $this->assertCount(2, $outputElements);
    }

  



}

