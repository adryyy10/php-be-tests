<?php

namespace App\Helper;

final class PalindromeFinder
{
    public function __construct(
        public readonly StringReverser $stringReverser
    )
    {}

    public function findPalindrome(string $word, string $possiblePalindrome): bool
    {
        return $this->stringReverser->reverse($word) === $possiblePalindrome;
    }
}
