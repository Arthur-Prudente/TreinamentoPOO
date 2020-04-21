<?php

    class Visualizacao
    {
        private $espectador;
        private $filme;

        public function __construct($espectador, $filme)
        {
            $this->setEspectador($espectador);
            $this->setFilme($filme);
            $this->filme->setViews($this->filme->getViews()+1);
            $this->espectador->viuMaisUm();
        }

        public function setEspectador($espectador)
        {
            $this->espectador = $espectador;
        }

        public function setFilme($filme)
        {
            $this->filme = $filme;
        }

        public function getEspectador()
        {
            return $this->espectador;
        }

        public function getFilme()
        {
            return $this->filme;
        }

        public function avaliar()
        {
            $this->getFilme()->setAvaliacao('Legal!');
        }

        public function avaliarNota($nota)
        {
            $this->getFilme()->setAvaliacao($nota);
        }

        public function avaliarPorcentagem($porcentagem)
        {
            $this->getFilme()->setAvaliacao($porcentagem.'%');
        }
    }

?>