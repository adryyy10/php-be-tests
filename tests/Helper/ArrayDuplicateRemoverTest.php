<?php

namespace App\Tests\Helper;

use App\Helper\ArrayDuplicateRemover;
use PHPUnit\Framework\TestCase;

class ArrayDuplicateRemoverTest extends TestCase
{
    public function testRemoveDuplicates(): void
    {
        $arrayDuplicateRemover = new ArrayDuplicateRemover();

        $output = $arrayDuplicateRemover->remove(['apple', 'banana', 'cherry', 'apple', 'banana', 'date']);

        $this->assertEquals(['apple', 'banana', 'cherry', 'date'], $output);
    }
}
