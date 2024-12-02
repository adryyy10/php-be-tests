<?php

namespace App\Helper;

/**
 * Helper that finds if two words are palindromes or not based on StringReverser service
 */
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
