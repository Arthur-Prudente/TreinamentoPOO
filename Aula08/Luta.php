<?php
    require_once 'Lutador.php';

    class Luta{

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        
        public function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }

        public function setRounds($rounds){
            $this->rounds = $rounds;
        }

        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }

        public function getDesafiado(){
            return $this->desafiado;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }

        public function getRounds(){
            return $this->rounds;
        }

        public function isAprovada(){
            return $this->aprovada;
        }

        public function marcarLuta($desafiado, $desafiante){
            if(($desafiado->getCategoria() === $desafiante->getCategoria()) && $desafiado != $desafiante)
            {
                $this->setAprovada(true);
                $this->setDesafiado($desafiado);
                $this->setDesafiante($desafiante);
            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar(){
            echo "<br>";
            if($this->isAprovada())
            {
                $this->getDesafiante()->apresentar();
                $this->getDesafiado()->apresentar();

                $vencedor = rand(0,2);

                switch($vencedor)
                {
                    case 0:
                        echo "<br>EMPATE!<br>";
                        $this->getDesafiante()->empatarLuta();
                        $this->getDesafiado()->empatarLuta();
                    break;

                    case 1:
                        echo "<br>VITÓRIA DO LUTADOR: " . $this->getDesafiante()->getNome() . "<br>";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                    break;

                    case 2:
                        echo "<br>VITÓRIA DO LUTADOR: " . $this->getDesafiado()->getNome() . "<br>";
                        $this->getDesafiante()->perderLuta();
                        $this->getDesafiado()->ganharLuta();
                    break;
                }
            }else{
                echo "Luta não pode acontecer!";
            }
        }
    }

?>