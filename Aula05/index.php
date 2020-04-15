<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php

            require_once "ContaBanco.php";

            $pessoa1 = new ContaBanco();//CC
            $pessoa2 = new ContaBanco();//CP

            $pessoa1->abrirConta("CC");
            $pessoa1->setDono("Arthur");

            $pessoa2->abrirConta("CP");
            $pessoa2->setDono("Roselia");

            print_r($pessoa1);
            print_r($pessoa2);

            $pessoa1->sacar(100);


        ?>
    </pre>
</body>
</html>