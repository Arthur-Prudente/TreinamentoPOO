<?php

    class ContaBanco
    {

        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function ContaBanco()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function abrirConta($t)
        {
            $this->setTipo($t);
            $this->setStatus(true);

            if($this->getTipo() == "CC")
            {
                $this->setSaldo(50);
            }elseif($this->getTipo() == "CP")
            {
                $this->setSaldo(150);
            }else
            {
                echo "<br>TIPO DE CONTA INVÁLIDA!<br>";
            }
        }

        public function fecharConta()
        {
            if($this->getSaldo() > 0)
            {
                echo "<br>SALDO POSITIVO NA CONTA!<br>";
            }elseif($this->getSaldo() < 0)
            {
                echo "<br>SALDO NEGATIVO NA CONTA!<br>";
            }else
            {
                $this->setStatus(false);
                echo "<br>CONTA ENCERRADA!<br>";
            }
        }

        public function depositar($v)
        {
            if($v >= 0)
            {
                $this->setSaldo($this->getSaldo() + $v && $this->getStatus() == true);
                echo "<br>DEPÓSITO DE R$ $v REALIZADO COM SUCESSO!<br>";
            }else
            {
                echo "<br>NÃO É PERMITIDO O DEPÓSTIVO DE R$ $v!<br>";
            }
        }

        public function sacar($v)
        {
            if($this->getSaldo() >= $v && $this->getSaldo() > 0 && $this->getStatus() == true)
            {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<br>SAQUE DE R$ $v REALIZADO COM SUCESSO!<br>";
            }else
            {
                echo "<br>SALDO INSUFICIENTE PARA REALIZAR A OPERAÇÃO!<br>";
                echo "DONO: {$this->getDono()} <br>SALDO R$: {$this->getSaldo()}<br>VALOR SOLICITADO R$: $v <br>";
            }
        }

        public function pagarMensalidade()
        {
            if($this->getStatus() == true)
            {
                if($this->getTipo() == "CC")
                {
                    $this->setSaldo($this->getSaldo() - 12);
                }else
                {
                    $this->setSaldo($this->getSaldo() - 20);
                }
            }else
            {
                echo "<br>CONTA INATIVA!<br>";
            }
        }

        public function setNumConta($n)
        {
            $this->numConta = $n;
        }

        public function getNumConta()
        {
            return $this->numConta;
        }

        public function setTipo($t)
        {
            $this->tipo = $t;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function  setDono($d)
        {
            $this->dono = $d;
        }

        public function getDono()
        {
            return $this->dono;
        }

        public function setSaldo($s)
        {
            $this->saldo = $s;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setStatus($st)
        {
            $this->status = $st;
        }
        
        public function getStatus()
        {
            return $this->status;
        }

    }

?>