<?php 
    class People
    {
        public $name; //properties 
        public $age;

        public function Register() // build method
        {
            echo "Seja bem-vindo, $this->name! Você tem $this->age anos e acabou de se cadastrar no site.";
        }
    }

    $rodrigo = new People();
    
    $rodrigo->name = "Rodrigo Martins"; //Insert values into properties
    $rodrigo->age = 29;
    
    $rodrigo ->Register(); // call method.
?>