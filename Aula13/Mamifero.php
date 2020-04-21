<?php
    require_once 'Animal.php';

    class Mamifero extends Animal
    {
        protected $corPelo;

        public function setCorPelo($corPelo)
        {
            $this->corPelo = $corPelo;
        }

        public function getCorPelo()
        {
            return $this->corPelo;
        }

        public function emitirSom()
        {
            echo 'Som de Mamífero';
        }
    }

?>