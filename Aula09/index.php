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

            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $pessoa = new Pessoa('Arthur', 22, 'Masculino');
            $livro = new Livro('Memórias Póstumas de Brás Cubas', 'Machado de Assis', 200, $pessoa);

            print_r($pessoa);  
            print_r($livro);

            $livro->detalhes();
        ?>
    </pre>
</body>
</html>