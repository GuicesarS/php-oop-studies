<?php

class Person
{
    public function assignName($name)
    {
        return "The person's name is: " . $name;
    }
}

class Display
{
    public $person;
    public $name;

    function __construct($name)
    {
        $this->person = new Person();
        $this->name = $name;
    }

    public function displayName()
    {
        echo $this->person->assignName($this->name);
    }
}

$display = new Display("Guilherme");
$display->displayName();