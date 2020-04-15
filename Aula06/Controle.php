<?php
    require_once "iControlador.php";

    class Controle implements iControlador
    {
        private $volume;
        private $ligado;
        private $tocando;

        public function Controle()
        {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        private function setVolume($v)
        {
            $this->volume = $v;
        }

        private function getVolume()
        {
            return $this->volume;
        }

        private function setLigado($l)
        {
            $this->ligado = $l;
        }

        private function isLigado()
        {
            return $this->ligado;
        }

        private function setTocando($t)
        {
            $this->tocando = $t;
        }

        private function isTocando()
        {
            return $this->tocando;
        }

        public function ligar()
        {
            if($this->isLigado() == false)
            {
                $this->setLigado(true);
            }else
            {
                echo "<br>A TELEVISÃO JÁ SE ENCONTRA LIGADA!<br>";
            }
        }

        public function desligar()
        {
            if($this->isLigado() == true)
            {
                $this->setLigado(false);
            }else
            {
                echo "<br>A TELEVISÃO JÁ SE ENCONTRA DESLIGADA!<br>";
            }
        }

        public function abrirMenu()
        {
            echo "<br>------MENU------<br>";
            echo "LIGADO: {$this->isLigado()}<br>";
            echo "VOLUME: {$this->getVolume()} ";

            for($i=0; $i<=$this->getVolume(); $i+=5)
            {
                echo "|";
            }

            echo "<br>TOCANDO: {$this->isTocando()}<br>";
            echo "<br>----------------<br>";
        }

        public function fecharMenu()
        {
            echo "<br>FECHANDO MENU...<br>";
        }

        public function aumentarVolume()
        {
            if($this->isLigado() == true && $this->getVolume() <=100)
            {
                $this->setVolume($this->getVolume() + 1);
            }else
            {
                echo "<br>A TELEVISÃO SE ENCONTRA DESLIGADA!<br>";
            }
        }

        public function diminuirVolume()
        {
            if($this->isLigado() == false && $this->getVolume() > 0)
            {
                $this->setVolume($this->getVolume() - 1);
            }else
            {
                echo "<br>A TELEVISÃO SE ENCONTRA DESLIGADA!<br>";
            }
        }

        public function ligarMudo()
        {
            if($this->isLigado() == true && $this->getVolume() != 0)
            {
                $this->setVolume(0);
            }else
            {
                echo "<br>A TELEVISÃO SE ENCONTRA DESLIGADA OU NO MUDO!<br>";
            }   
        }

        public function desligarMudo()
        {
            if($this->isLigado() == true && $this->getVolume() == 0)
            {
                $this->setVolume(50);
            }else
            {
                echo "<br>A TELEVISÃO SE ENCONTRA DESLIGADA!<br>";
            }  
        }

        public function play()
        {
            if($this->isLigado() == true && $this->isTocando() == false)
            {
                $this->setTocando(true);
            }else
            {
                echo "<br>A TELEVISÃO SE ENCONTRA DESLIGADA OU JÁ ESTÁ TOCANDO!<br>";
            }
        }

        public function pause()
        {
            if($this->isLigado() == true && $this->isTocando() == true)
            {
                $this->setTocando(false);
            }else
            {
                echo "<br>A TELEVISÃO SE ENCONTRA DESLIGADA OU JÁ ESTÁ NO PAUSE!<br>";
            }
        }

    }

?>