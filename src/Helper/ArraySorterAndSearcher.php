<?php

namespace App\Helper;

final class ArraySorterAndSearcher
{
  public function find(array $numbers, int $target): array
  {
    $output = [];
    $total = 0;
    for ($i=0, $j=count($numbers)-1; $i < $j;) {
      // Start from beggining/end of numbers
      $left = $numbers[$i];
      $right = $numbers[$j];

      $currentTotal = $left + $right;
      if ($currentTotal === $target) return [$left, $right];

      // Decrease $j if the sum is greater than target
      if ($currentTotal > $target) {
        $j--;
        continue;
      }

      $i++;
      if ($currentTotal > $total) {
        $total = $currentTotal;
        $output = [$left, $right];
      }
    }

    return $output;
  }
}
