#!/usr/bin/env php
<?php

namespace BOA\Tests;

use BOA\SortAsc;
use BOA\SortDesc;
use BOA\Sorter;

require_once __DIR__ . '/../vendor/autoload.php';


$testArray = [1,9,2,8,3,7,6,4];
$testString = 'Protests continued in the streets of the capital Minsk on Saturday following a disputed election two weeks ago ';

$sorter = new Sorter(new SortDesc());
var_dump($sorter->sort($testArray)) ;
