<?php

declare(strict_types = 1);

namespace BOA;

interface SorterInterface
{
    /**
     * It is an interface for classes that implement sorting mechanisms.
     * @author Alexandr Bovsunovsky <bovsunovsky@rambler.ru>
     */
    public function sort(array $data): array    ;
}
