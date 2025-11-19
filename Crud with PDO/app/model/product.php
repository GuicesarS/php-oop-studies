<?php 
class Product
{
    public $name;
    public $description;

    public function getName($name)
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription($description)
    {
        return $this->$description;
    }

    public function setDescription($description)
    {
        $this->$description = $description;
    }
}
?>