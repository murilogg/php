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
    $x[0] = 2;
    $x[1] = 2;
    $x[2] = 2;
    echo"PRINT_R ";
    print_r($x);
    echo "<br><br>";
    echo "VAR_DUMP ";
    var_dump($x);
    echo "<br><br>";
    echo "VAR_EXPORT ";
    var_export($x);


    ?>
</div>
</body>
</html>
 