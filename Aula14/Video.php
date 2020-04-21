<?php
    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo
    {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo)
        {
            $this->setTitulo($titulo);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function setAvaliacao($avaliacao)
        {
            $this->avaliacao = $avaliacao;
        }

        public function setViews($views)
        {
            $this->views = $views;
        }

        public function setCurtidas($curtidas)
        {
            $this->curtidas = $curtidas;
        }

        public function setReproduzindo($reproduzindo)
        {
            $this->reproduzindo = $reproduzindo;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getAvaliacao()
        {
            return $this->avaliacao;
        }

        public function getViews()
        {
            return $this->views;
        }

        public function getCurtidas()
        {
            return $this->curtidas;
        }

        public function isReproduzindo()
        {
            return $this->reproduzindo;
        }

        public function play()
        {
            if(!$this->isReproduzindo())
            {
                $this->setReproduzindo(true);
                echo '<p>Reproduzindo!</p>';
            }else
            {
                echo '<p>Já está em reprodução!</p>';
            }
        }

        public function pause()
        {
            if($this->isReproduzindo())
            {
                $this->setReproduzindo(false);
                echo '<p>Pausado!</p>';
            }else
            {
                echo '<p>Já está pausado!</p>';
            }
        }

        public function like()
        {
            $this->setCurtidas($this->getCurtidas()+1);
            echo `<p>Total de Curtidas do Vídeo {$this->getTitulo()} = `. $this->getCurtidas().`</p>`;
        }
    }

?>