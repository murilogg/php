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
    $p = "leite";
    $r = 4.5;
    echo "O $p custa $r usando ECHO<br>";
    printf("O %s custa %.2f usando PRINTF", $p, $r);

    ?>
</div>
</body>
</html>
 