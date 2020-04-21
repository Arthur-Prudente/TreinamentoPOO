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

        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $videos = array();

        $videos[0] = new Video('Aula 1 de POO');
        $videos[1] = new Video('Aula 12 de PHP');
        $videos[2] = new Video('Aula 15 de HTML5');

        print_r($videos);

        $gafanhotos = array();

        $gafanhotos[0] = new Gafanhoto('Arthur', 22, 'M', 'ArthurQMP', 0);

        print_r($gafanhotos);

        $visualizao = array();

        $visualizao[0] = new Visualizacao($gafanhotos[0], $videos[0]);

        print_r($visualizao);

        $visualizao[0]->avaliar();

        echo '<p>AVALIAÇÃO COMUM</p>';

        print_r($visualizao);

        echo '<p>AVALIAÇÃO NOTA</p>';

        $visualizao[0]->avaliarNota(7.5);

        print_r($visualizao);

        echo '<p>AVALIAÇÃO PORCENTAGEM</p>';

        $visualizao[0]->avaliarPorcentagem(90);

        print_r($visualizao);
    ?>
</pre>
</body>
</html>