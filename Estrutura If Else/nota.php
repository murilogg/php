<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Nota</title>
</head>
<body>
<div>
    <?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    $m = ($n1 + $n2)/2;

    echo "A MEDIA ENTRE <b><font color='red'> $n1 </font></b> E <b><font color='red'> $n2 </font></b> É : <b><font color='red'> $m</font></b> <br>";

    if($m >= 7) {
        $r = "APROVADO";
    }else {
        $r = "REPROVADO";
    }

    echo "A SITUAÇÃO DO ALUNO É <b><font color='red'> $r </font></b> <br>";
    ?>
    <a href="nota.html"><input type="submit" value="VOLTAR"/> </a>
</div>
</body>
</html>
 