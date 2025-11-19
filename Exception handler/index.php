<?php
class Newsletter
{
    public function cadastrarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Este e-mail é inválido", 400);
        } else {
            echo "Email cadastrado com sucesso.";
        }
    }
}

$newsletter = new Newsletter();

try{
    $newsletter->cadastrarEmail(33133131);
}
catch(Exception $ex)
{
    echo "Result: " . $ex->getMessage() . "<br>Code: " . $ex->getCode() . "<br>File: " . $ex->getFile() . "<br>Line: " . $ex->getLine();
}

