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
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa('Arthur', 22, 'Masculino');
            $p2 = new Aluno('Arthur', 22, 'Masculino', 123, 'ADS');
            $p3 = new Professor('Arthur', 22, 'Masculino', 'Inglês', 500);
            $p4 = new Funcionario('Arthur', 22, 'Masculino', 'Pedagógico', true);

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

        ?>
    </pre>
</body>
</html>