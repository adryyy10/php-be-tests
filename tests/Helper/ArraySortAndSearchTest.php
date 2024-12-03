<?php

namespace App\Tests\Helper;

use App\Helper\ArraySorterAndSearcher;
use PHPUnit\Framework\TestCase;

class ArraySortAndSearchTest extends TestCase
{
  public function testSortAndSearch(): void
  {
    $arraySorter = new ArraySorterAndSearcher();

    $output = $arraySorter->find([10, 22, 28, 29, 30, 40], 54);
    $this->assertEquals([22, 30], $output);

    $output = $arraySorter->find([10, 22, 28, 29, 30, 40], 38);
    $this->assertEquals([10, 28], $output);

    $output = $arraySorter->find([10, 22, 28, 29, 30, 40], 70);
    $this->assertEquals([30, 40], $output);

    $output = $arraySorter->find([10, 22, 28, 29, 30, 40], 0);
    $this->assertEquals([], $output);

    $output = $arraySorter->find([10, 22, 28, 29, 30, 40], 1500);
    $this->assertEquals([30, 40], $output);

    $output = $arraySorter->find([10, 22, 28, 29, 30, 40], -1);
    $this->assertEquals([], $output);
  }
}
