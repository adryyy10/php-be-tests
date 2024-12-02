<?php

namespace App\Tests\Helper;

use App\Helper\ArrayCountMapper;
use PHPUnit\Framework\TestCase;

class ArrayCountMapperTest extends TestCase
{
    public function testCountingWords(): void
    {
        $arrayCountMapper = new ArrayCountMapper();

        //$mappedWords = $arrayCountMapper->mapWords('hello hello hello bye bye cya cya adios');
        //$this->assertSame(['hello', 'bye', 'cya'], $mappedWords);

        $mappedWords = $arrayCountMapper->mapWords('cya cya adios hello hello hello hello bye bye bye');
        $this->assertSame(['hello', 'bye', 'cya'], $mappedWords);
    }
}
