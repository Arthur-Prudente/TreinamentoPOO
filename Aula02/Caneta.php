<?php
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;


        function rabiscar()
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

        function tampar()
        {
            $this->tampada = true;
        }

        function destampar()
        {
            $this->tampada = false;
        }
    }
?>