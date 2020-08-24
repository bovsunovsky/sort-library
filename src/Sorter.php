<?php

declare(strict_types = 1);

namespace BOA;

final class Sorter
{
    private $sortOrder;

    public function __construct(SorterInterface $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setSortOrder(SorterInterface $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function sort(array $data): array
    {
        return $this->sortOrder->sort($data)  ;
    }
}
