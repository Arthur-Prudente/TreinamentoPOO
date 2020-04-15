<?php

    require_once 'Aluno.php';

    class Bolsista extends Aluno
    {
        private $bolsa;
        

        public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);
            $this->setBolsa($bolsa);
        }

        public function setBolsa($bolsa)
        {
            $this->bolsa = $bolsa;
        }

        public function getBolsa()
        {
            return $this->bolsa;
        }

        public function renovarBolsa()
        {
            echo "<p>Bolsa Renovada!</p>";
        }

        public function pagarMensalidade()
        {
            echo "<p> {$this->getNome()} é bolsista. Então paga com desconto!";
        }
    }

?>