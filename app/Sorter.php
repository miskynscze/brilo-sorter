<?php declare(strict_types=1);

namespace Brilo;

class Sorter
{

    public function sortArray(array $array): array
    {
        if(empty($array)) {
            throw new \InvalidArgumentException('Array is empty');
        }

        asort($array, SORT_NATURAL | SORT_FLAG_CASE);
        return array_values($array);
    }
}