<?php 
    class People
    {
        const name = "Guilherme Soares"; // create constant

        public function showName()
        {
            echo "<br> Using self in People class: const = " . self::name; // reference constant inside the class
        }
    }

    class Guilherme extends People
    {
        const name = "Soares";

        public function showName()
        {
            echo "Using parent in Guilherme class: const = " . parent::name . " referencing parent const";
            echo "<br>Using self in Guilherme class: const = " . self::name; // reference constant inside the class, now "Soares"
        }
    }

    $guilherme = new Guilherme();
    $guilherme->showName();

    $guigas = new People();
    $guigas->showName();
?>