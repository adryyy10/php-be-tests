<?php

namespace App\Helper;

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
