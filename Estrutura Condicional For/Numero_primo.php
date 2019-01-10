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

    $primo = isset($_GET["num"]) ? $_GET["num"] : 1;
    $div = 0;

    echo "Analisando o número $primo ...<br>";
    echo "O numero $primo é multiplo de: ";

    for ($cont = 1; $cont <= $primo; $cont++) {
        $multi = $primo % $cont;
        if ($multi == 0 && $cont >= 1) {
            echo "<span>$cont </span>";
            $div++;
        }
    }
    echo "<br>O numero $primo Possui <span>$div </span> Divisores<br>";
    if ($div == 2) {
        echo "$primo É Primo";
    } else {
        echo "$primo Não é Primo";
    }

    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 