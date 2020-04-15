<?php

    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitoria($vitorias);
            $this->setEmpate($empates);
            $this->setDerrota($derrotas);
        }

        public function apresentar(){
            echo "<br>---------APRESENTAÇÃO DO LUTADOR---------<br>";
            echo "Lutador: ".$this->getNome()."<br>";
            echo "Origem: ".$this->getNacionalidade()."<br>";
            echo  $this->getIdade()." anos<br>";
            echo  $this->getAltura()."m de altura<br>";
            echo "Pesando: ".$this->getPeso()."<br>";
            echo "Ganhou: ".$this->getVitoria()."<br>";
            echo "Perdeu: ".$this->getDerrota()."<br>";
            echo "Empatou: ".$this->getEmpate()."<br>";
            echo "-----------------------------------------<br>";
        }

        public function Status(){
            echo"<br>";
            echo $this->getNome();
            echo " é um peso: ".$this->getCategoria()."<br>";
            echo $this->getVitoria()." vitórias<br>";
            echo $this->getDerrota()." derrotas<br>";
            echo $this->getEmpate()." empates<br>";
            echo"<br>";
        }

        public function ganharLuta(){
            $this->setVitoria($this->getVitoria() + 1);
        }

        public function perderLuta(){
            $this->setDerrota($this->getDerrota() + 1);
        }

        public function empatarLuta(){
            $this->setEmpate($this->getEmpate() + 1);
        }

        private function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        private function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        private function getNacionalidade(){
            return $this->nacionalidade;
        }

        private function setIdade($idade){
            $this->idade = $idade;
        }

        private function getIdade(){
            return $this->idade;
        }

        private function setAltura($altura){
            $this->altura = $altura;
        }

        private function getAltura(){
            return $this->altura;
        }

        private function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }

        private function getPeso(){
            return $this->peso;
        }

        private function setCategoria(){
            if($this->getPeso()<52.2){
                echo "PESO ABAIXO DE QUALQUER CATEGORIA!";
            }elseif($this->getPeso()<=70.3){
                $this->categoria = "Leve";
            }elseif($this->getPeso()<=83.9){
                $this->categoria = "Médio";
            }elseif($this->getPeso()<=120.2){
                $this->categoria = "Pesado";
            }else{
                echo "PESO ACIMA DE QUALQUER CATEGORIA! LUTADOR:". $this->getNome();
            }
        }

        public function getCategoria(){
            return $this->categoria;
        }

        private function setVitoria($vitorias){
            $this->vitorias = $vitorias;
        }

        private function getVitoria(){
            return $this->vitorias;
        }

        private function setDerrota($derrotas){
            $this->derrotas = $derrotas;
        }

        private function getDerrota(){
            return $this->derrotas;
        }

        private function setEmpate($empates){
            $this->empates = $empates;
        }

        private function getEmpate(){
            return $this->empates;
        }
    }

?>