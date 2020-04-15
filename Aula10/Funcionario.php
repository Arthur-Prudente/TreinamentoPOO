<?php

    require_once 'Pessoa.php';

    class Funcionario extends Pessoa
    {
        private $setor;
        private $trabalhando;

        public function __construct($nome, $idade, $sexo, $setor, $trabalhando)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setSetor($setor);
            $this->setTrabalhando($trabalhando);
        }

        public function setSetor($setor)
        {
            $this->setor = $setor;
        }

        public function setTrabalhando($trabalhando)
        {
            $this->trabalhando = $trabalhando;
        }

        public function getSetor()
        {
            return $this->setor;
        }

        public function isTrabalhando()
        {
            return $this->trabalhando;
        }

        public function mudarTrabalho()
        {
            $this->setTrabalhando(!$this->isTrabalhando());
        }
    }

?>