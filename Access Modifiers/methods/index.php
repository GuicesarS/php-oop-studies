<?php 

class People
{
    public $name;

    private function Talk()
    {
       echo $this->name . " Talked";
    }

    public function showAction()
    {
        return $this->Talk();
    }
}

$person = new People();
$person->name = "Guilherme";
$person->showAction();

?>