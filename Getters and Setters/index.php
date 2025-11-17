<?php

class LoginForm
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->email = $e;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($s)
    {
        $this->senha = $s;
    }

    public function LoginAction()
    {
        if($this->email == "teste@teste.com" and $this->senha =="123456" ):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos!";
        endif;
    }
}

$logar = new LoginForm();

$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");

$logar->LoginAction();

echo "<br>";
echo "Dados recebidos: " . $logar->getEmail() . " <br> e senha:" . $logar->getSenha();

?>