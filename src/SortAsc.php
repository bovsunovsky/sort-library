<?php

declare(strict_types = 1);

namespace BOA;

class SortAsc implements SorterInterface
{
    /**
     * This is an implementation of the ascending sort mechanism
     */
    public function sort(array $data): array
    {
        sort($data);

        return $data;
    }
}
