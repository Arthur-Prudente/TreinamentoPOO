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

        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();
        $m->setPeso(250.00);
        $m->setIdade(30);
        $m->setMembros(4);
        $m->setCorPelo('Branco');

        print_r($m);

        $m->emitirSom();

        echo '<br><br>';

        $l = new Lobo();
        $l->setPeso(120.00);
        $l->setIdade(10);
        $l->setMembros(4);
        $l->setCorPelo('Marrom');

        print_r($l);

        $l->emitirSom();

        echo '<br><br>';

        $c = new Cachorro();
        $c->setPeso(70.00);
        $c->setIdade(5);
        $c->setMembros(4);
        $c->setCorPelo('Pardo');

        print_r($c);

        $c->emitirSom();

        $c->reagirFrase('Olá');
        $c->reagirDono(false);
        $c->reagirHoraMin(5,10);
        $c->reagirIdadePeso(10,50);

    ?>
    </pre>
</body>
</html>