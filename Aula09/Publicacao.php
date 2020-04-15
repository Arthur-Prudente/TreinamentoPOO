<?php

    interface Publicacao
    {
        public function abrir();
        public function fechar();
        public function folhear($nPagina);
        public function avancarPag();
        public function voltarPag();
    }

?>