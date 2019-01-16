<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
    $matriz = array(array(3, 4),
                    array(6, 2),
                    array(5, 1,));

    $matriz[1][0] = $matriz [0][0];
    $matriz[0][0] = $matriz [2][1];
    $matriz[2][1] = $matriz [0][1];
    $matriz[0][1] = $matriz [1][1];
    $matriz[1][1] = $matriz [2][1];

    $matriz[2][1] += 2;

    print_r($matriz);
    ?>
    </pre>
</div>
</body>
</html>
 