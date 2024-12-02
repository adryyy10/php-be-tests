<?php

namespace App\Helper;

/**
 *  Helper that removes all duplicate values from the array while preserving the original order
 */
final class ArrayDuplicateRemover
{
    public function remove(array $words): array
    {
        $alreadyAppeared = [];

        foreach ($words as $word) {
            if (in_array($word, $alreadyAppeared)) {
                continue;
            }
            $alreadyAppeared[] = $word;
        }
        
        return $alreadyAppeared;
    }
}
