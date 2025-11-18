<?php 
    interface Crud
    {
        public function Create();
        public function Read();
        public function Update();
        public function Delete();
    }

    Class Noticias implements Crud{
        public function Create(){}
        public function Read(){}
        public function Update(){}
        public function Delete(){}
    }
?>