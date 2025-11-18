<?php

class Animal
{
    public function Walk()
    {
        echo "The animal walked";
    }

    public function Run()
    {
        echo "The animal ran";
    }
}
// Polymorphism would be rewriting an inherited method from the class.

class Horse extends Animal
{
    public function Walk()
    {
        return $this->Run();
    }
}

$animal = new Horse();
$animal->Walk();
?>