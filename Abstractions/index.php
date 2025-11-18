<?php 
    abstract class Banco
    {
        protected $saldo;
        protected $limiteSaque;
        
        public function setSaldo($valor)
        {
            $this->saldo = $valor;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        abstract protected function Sacar($valorSaque);
        abstract protected function Depositar($valorDeposito);
    }

    class Itau extends Banco
    {
        public function Sacar($valorSaque)
        {
           $this->saldo -= $valorSaque;
           echo "<br>Sacando " . $valorSaque;
        }
        public function Depositar($valorDeposito)
        {
            $this->saldo += $valorDeposito;
            echo "<br>Depositando " . $valorDeposito;
        }
    }

$itau = new Itau();
$itau->setSaldo(1000);
echo "Valor Total: " . $itau->getSaldo();

$itau->Sacar(100);
echo "<br>Valor Total após saque: " . $itau->getSaldo();

$itau->Depositar(300);
echo "<br>Valor Total após deposito : " . $itau->getSaldo();



?>