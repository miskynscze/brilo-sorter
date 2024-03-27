<?php declare(strict_types=1);

namespace tests;

use Brilo\Sorter;
use PHPUnit\Framework\TestCase;

class SorterTest extends TestCase
{

    public function testExceptionUsingDifferentType(): void
    {
        $this->expectException(\TypeError::class);

        $sorter = new Sorter();
        $sorter->sortArray('Test');
    }

    public function testCantSortWithEmptyArray(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $sorter = new Sorter();
        $sorter->sortArray([]);
    }

    public function testIsArraySortExpected(): void
    {
        $sorter = new Sorter();

        $array = ['ahoj1', 'Ahoj10', 'ahoj12', 'Ahoj2', 'ahoj3'];
        $expected = ['ahoj1', 'Ahoj2', 'ahoj3', 'Ahoj10', 'ahoj12'];

        $array = $sorter->sortArray($array);
        $this->assertEquals($expected, $array);
    }
}