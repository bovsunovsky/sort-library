<?php
/**
 * Created by PhpStorm.
 * User: budonnyi
 * Date: 23.08.20
 * Time: 14:41
 */

namespace BOA;

final class Sorter
{
    private $sortOrder;

    public function __construct(SortInterface $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setSortOrder(SortInterface $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function sort($data)
    {
        if (!is_array($data)) {
            $data = explode(" ", $data);
        }
        return $this->sortOrder->sort($data)  ;
    }
}
