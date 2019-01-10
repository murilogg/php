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
    $numero = isset($_GET["num"]) ? $_GET["num"] : 1;
    $cont = 1;

    echo "<h3>Mostrando tabuada do $numero</h3>";

    do {
        $x = $numero * $cont;

        echo "$numero X $cont = $x <br>";

        $cont++;

    } while ($cont <= 10);

    ?>
    <a href="javascript:history.go(-1)">Voltar</a>

</div>
</body>
</html>
