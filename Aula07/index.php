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

            require_once 'Lutador.php';

            $l1 = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 1, 2);

            print_r($l1);

            $l1->apresentar();

            $l1->status();
        ?>
    </pre>
</body>
</html>