<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;


        public function rabiscar()
        {
            if($this->tampada == false)
            {
                echo "<p>Estou Rabiscando...</p>";
            }
            else
            {
                echo "<p>Não posso rabiscar!</p>";
            }
        }

        public function tampar()
        {
            $this->tampada = true;
        }

        public function destampar()
        {
            $this->tampada = false;
        }
    }
?>