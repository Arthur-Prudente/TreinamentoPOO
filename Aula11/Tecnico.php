<?php

    require_once 'Aluno.php';

    class Tecnico extends Aluno
    {
        private $registroProfissional;
        

        public function __construct($nome, $idade, $sexo, $matricula, $curso, $registroProfissional)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);
            $this->setRegistro($registroProfissional);
        }

        public function setRegistro($registroProfissional)
        {
            $this->registroProfissional = $registroProfissional;
        }

        public function getRegistro()
        {
            return $this->registroProfissional;
        }

        public function praticar()
        {
            echo "<p>Técnico {$this->getNome()} está praticando!</p>";
        }
    }

?>