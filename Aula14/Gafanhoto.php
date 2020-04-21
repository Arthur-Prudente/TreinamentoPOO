<?php

    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa
    {
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login, $totAssistido)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->setLogin($login);
            $this->setTotAssistido($totAssistido);
        }

        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function setTotAssistido($totAssistido)
        {
            $this->totAssistido = $totAssistido;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getTotAssistido()
        {
            return $this->totAssistido;
        }

        public function viuMaisUm()
        {
            return $this->setTotAssistido($this->getTotAssistido()+1);
        }
    }

?>