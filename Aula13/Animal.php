<?php

    abstract class Animal
    {
        protected $peso;
        protected $idade;
        protected $membros;

        public function setPeso($peso)
        {
            $this->peso = $peso;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function setMembros($membros)
        {
            $this->membros = $membros;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function getMembros()
        {
            return $this->membros;
        }

        public abstract function emitirSom();
    }

?>