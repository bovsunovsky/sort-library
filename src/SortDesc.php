<?php

declare(strict_types = 1);

namespace BOA;

class SortDesc implements SorterInterface
{
    /**
     * This is an implementation of a descending sorting mechanism.
     */
    public function sort(array $data): array
    {
        rsort($data);

        return $data;
    }
}
