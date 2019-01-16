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
    $valor = array(0 => "X",
        3 => "U",
        7 => "A",
        9 => "L");
    print_r($valor);

    unset($valor[3]);

    print_r($valor);
    ?>
    </pre>
    <a href="array.php"><input type="submit" value="VOLTAR ARRAY SIMPLES"></a>
</div>
</body>
</html>
 