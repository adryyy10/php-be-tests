<?php

namespace App\Tests\Helper;

use App\Helper\StringReverser;
use PHPUnit\Framework\TestCase;

class StringReverserTest extends TestCase
{
    public function testReverse(): void
    {
        $stringReverser = new StringReverser();

        $output = $stringReverser->reverse('hello');

        $this->assertEquals('olleh', $output);
    }
}
