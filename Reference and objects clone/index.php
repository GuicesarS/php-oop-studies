<?php
class Pessoa
{
    public $idade;

    public function __clone()
    {
       echo "Clonagem de objetos realizada.";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 21;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 19;

echo $pessoa2->idade;
