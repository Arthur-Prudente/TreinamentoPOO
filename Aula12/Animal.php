<?php

    abstract class Animal
    {
        protected $peso;
        protected $idade;

        public function setPeso($peso)
        {
            $this->peso = $peso;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public abstract function locomover();

        public abstract function alimentar();

        public abstract function emitirSom();
    }

?>