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

    $re = isset($_GET["estado"])?$_GET["estado"]:0;

    switch ($re){
        case 1:
            $reg = "Região Norte";
            break;
        case 2:
            $reg = "Região Nordeste";
            break;
        case 3:
            $reg = "Região Centro-Oeste";
            break;
        case 4:
            $reg = "Região Sudeste";
            break;
        case 5:
            $reg = "Região Sul";
            break;
        default;

    }

    echo "Você mora na <span class='foco'>$reg</span> ";



    ?>
    <a href="estado.html">Voltar</a>
</div>
</body>
</html>
 