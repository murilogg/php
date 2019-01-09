<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

    $i = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
    $f = isset($_GET["final"]) ? $_GET["final"] : 2;
    $cont = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

    if ($i < $f) {
        while ($i <= $f) {
            echo "$i ";
            $i = $i + $cont;
        }
    } else {
        while ($i >= $f) {
            echo "$i";
            $i = $i - $cont;
        }
    }

    ?>
    <a href="while.html"><br>Voltar</a>
</div>
</body>
</html>
 