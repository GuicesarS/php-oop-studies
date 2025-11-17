<?php

class LoginForm
{
    private $email;
    private $password;
    private $name;

    public function __construct($email, $password, $name)
    {
       $this->name = $name;
       $this->setpassword($password);
       $this->setEmail($email);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->email = $e;
    }

    public function getpassword()
    {
        return $this->password;
    }

    public function setpassword($s)
    {
        $this->password = $s;
    }

    public function getName()
    {
        return $this->name;
    }

    public function LoginAction()
    {
        if($this->email == "teste@teste.com" and $this->password =="123456" ):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos!";
        endif;
    }
}

$logar = new LoginForm("teste@teste.com" , "123456", "Guilherme");
$logar->LoginAction();

echo "<br>";
echo "Dados recebidos: " . $logar->getEmail() . " <br> password:" . $logar->getpassword() . "<br> Name : " . $logar->getName();

?>