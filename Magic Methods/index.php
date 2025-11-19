<?php 

class Person
{
    private $data = array();

    public function __set($key, $value)
    {
        // Magic method triggered when trying to set an inaccessible or non-existent property
        $this->data[$key] = $value; 
    }

    public function __get($key)
    {
        // Magic method triggered when trying to access an inaccessible or non-existent property
        return $this->data[$key];
    }

    public function __toString()
    {
        // Magic method automatically called when the object is treated as a string (e.g., echo $object)
        return "Name: " . $this->name . "<br>Age: " . $this->age . "<br>Gender: " . $this->gender . "<br>Married (Y/N): " . $this->married;
    }

    public function __invoke()
    {
        return "<br>Person Object invoked using parentheses";
    }
}

$person = new Person();

$person->name = "Guilherme";
$person->age = 24;
$person->gender = "Male";
$person->married = 'Y';

echo $person;
echo $person();

?>
