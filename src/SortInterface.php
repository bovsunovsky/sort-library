<?php

namespace BOA;

interface SortInterface
{
    /**
     * It is an interface for classes that implement sorting mechanisms.
     * @author Alexandr Bovsunovsky <bovsunovsky@rambler.ru>
     */
    public function sort(array $data): array    ;
}
