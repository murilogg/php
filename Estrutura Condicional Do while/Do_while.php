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

    $fat = isset($_GET["num"]) ? $_GET["num"] : 1;
    $cont = $fat;
    $num = 1;

    do{
        $num = $num * $cont;
        $cont --;
    }while($cont >= 1 );
    echo "<h2>$fat != $num</h2>";


    ?>
    <a href="Do_While.html">Voltar</a>
</div>
</body>
</html>
 