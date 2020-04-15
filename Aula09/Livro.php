<?php
    require_once 'Publicacao.php';
    
    class Livro implements Publicacao{

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($leitor);
        }
        
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function setAutor($autor)
        {
            $this->autor = $autor;
        }

        public function setTotPaginas($totPaginas)
        {
            $this->totPaginas = $totPaginas;
        }

        public function setPagAtual($pagAtual)
        {
            $this->pagAtual = $pagAtual;
        }

        public function setAberto($aberto)
        {
            $this->aberto = $aberto;
        }

        public function setLeitor($leitor)
        {
            $this->leitor = $leitor;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function getTotPaginas()
        {
            return $this->totPaginas;
        }

        public function getPagAtual()
        {
            return $this->pagAtual;
        }

        public function isAberto()
        {
            return $this->aberto;
        }

        public function getLeitor()
        {
            return $this->leitor;
        }

        public function detalhes()
        {
            echo "<br>Livro: " . $this->getTitulo() . " escrito por: " . $this->getAutor();
            echo "<br>Páginas: " . $this->getTotPaginas();
            echo "<br>Sendo lido por: " .$this->getLeitor()->getNome();
            echo "<br>Página atual: " . $this->getPagAtual();
        }

        public function abrir()
        {
            $this->setAberto(true);
        }

        public function fechar()
        {
            $this->setAberto(false);
        }

        public function folhear($nPagina)
        {
            if($this->isAberto() && $nPagina <= $this->getTotPaginas())
            {
                $this->setPagAtual($nPagina);
            }elseif(!$this->isAberto())
            {
                echo "O livro está fechado!";
            }else
            {
                echo "O livro possui " . $this->getTotPaginas() . " páginas no total.";
            }
        }

        public function avancarPag()
        {
            if($this->isAberto() && $this->getPagAtual() < $this->getTotPaginas())
            {
                $this->setPagAtual($this->getPagAtual() + 1);
            }else
            {
                echo "Erro ao avançar a página!";
            }
        }

        public function voltarPag()
        {
            if(!$this->isAberto() && $this->getPagAtual() > 0)
            {
                $this->setPagAtual($this->getPagAtual() - 1);
            }else
            {
                echo "Erro ao voltar a página!";
            }
        }
    }

?>