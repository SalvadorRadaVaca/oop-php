<?php

namespace WebtrainingZone\Models;

class Person {
    //Attributes (states)
    protected $name;
    protected $lastName;
    protected $dateOfBirth;

    public function __construct($name, $lastName, $dateOfBirth) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function think() {

    }

    public function breath() {

    }

    //Methods (behaviour)
    public function walk() {

    }

    private function login() {

    }

    public function __toString() {
        return $this->name . " " . $this->lastName;
    }
}
