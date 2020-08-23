This is a study sort-library based on Default Project
------------
Installation
Either run

composer require bovsunovsky/sort-library

or add

"bovsunovsky/sort-library": "~1.0"

to the require section of your composer.json.

Usage
-----

 - Add: use BOA\Sorter;
 - Set sort direction;
 - Call method sot($data);
 
 Example
 _______
 
 $sorter = new Sorter(new SortDesc());
 
 var_dump($sorter->sort($testString)) ;



Tests
-----

Run with console :" ./tests/test" or "php tests/test"

License
-------


This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2020, bovsunovsky
