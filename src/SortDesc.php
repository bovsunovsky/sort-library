<?php
/**
 * Created by PhpStorm.
 * User: budonnyi
 * Date: 23.08.20
 * Time: 14:29
 */

namespace BOA;

class SortDesc implements SortInterface
{
    /**
     * This is an implementation of a descending sorting mechanism.
     *
     * @author Alexandr Bovsunovsky <bovsunovsky@rambler.ru>
     */
    public function sort(array $data): array
    {
        rsort($data);

        return $data;
    }
}
