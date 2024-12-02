<?php

namespace App\Helper;

/**
 * Service that accepts a string and returns the top 3 most frequent words in the string
 */
final class ArrayCountMapper
{
    public function mapWords(string $words): array
    {
        $wordsAsArray = explode(" ", $words);
        $mappedWords = [];

        foreach ($wordsAsArray as $word) {
          // If already added before, +1 to its value
          if (array_key_exists($word, $mappedWords) !== FALSE) {
            $mappedWords[$word]++;
            continue;  
          }

          $mappedWords[$word] = 1;
        }

        // Order associative array in descending order according to value
        arsort($mappedWords);

        // Get only 3 first items of array
        $splicedArray = array_splice($mappedWords, 0, 3);

        // Return only keys (words)
        return array_keys($splicedArray);
    }
}
