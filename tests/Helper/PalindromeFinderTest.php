<?php

namespace App\Tests\Helper;

use App\Helper\PalindromeFinder;
use App\Helper\StringReverser;
use PHPUnit\Framework\TestCase;

class PalindromeFinderTest extends TestCase
{
    public function testFindPalindrome(): void
    {
        $stringReverser = new StringReverser();
        $palindromeFinder = new PalindromeFinder($stringReverser);

        $output = $palindromeFinder->findPalindrome('hello', 'olleh');

        $this->assertEquals(true, $output);
    }
}
