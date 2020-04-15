<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";

            $c1 = new Caneta("Faber Castell", 1);
            print_r($c1);

            $c1->setModelo("Bic");
            $c1->setPonta(0.5);
            print_r($c1);

            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        ?>
    </pre>
</body>
</html>