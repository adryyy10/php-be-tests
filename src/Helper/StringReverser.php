<?php

namespace App\Helper;

class StringReverser
{
    public function reverse(string $stringToReverse): string
    {
        $reversedString = '';
        for ($i=strlen($stringToReverse)-1; $i >= 0; $i--) { 
            $reversedString .= $stringToReverse[$i];
        }
        return $reversedString;
    }
}
