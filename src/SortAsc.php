<?php

namespace BOA;

class SortAsc implements SortInterface
{
    /**
     * This is an implementation of the ascending sort mechanism
     * @author Alexandr Bovsunovsky <bovsunovsky@rambler.ru>
     */
    public function sort(array $data): array
    {
        sort($data);

        return $data;
    }
}
