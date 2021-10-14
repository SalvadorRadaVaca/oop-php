<?php

require_once("vendor/autoload.php");

use WebtrainingZone\Models\{
    Person, Student
};

// First instance (object) of Person class
$esmeralda = new Person("Esmeralda", "Rodriguez", "1995-10-25");
$luis = new Student("Luis", "Rodriguez", "2010-03-23", "2017213244");

echo $esmeralda;
echo $luis;

$people = [$esmeralda, $luis];

foreach($people as $id => $person):
    print $person;
endforeach;

// Design Patterns
// - Factory
// - Facade
// - Suscriber / observer
// - Singleton
// - Module, R
// - Adapter

// TDD

//SOLID