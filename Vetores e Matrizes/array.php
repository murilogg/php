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
    $n = array(4=>5,1=>2,3=> 1,5=> 4,2=> 3);
    $n[] = 6;
    print_r($n);

    arsort($n);
    print_r($n);

    $cont = count($n);
    sort($n);

    echo "Meu vetor tem $cont elementos<br>";

    print_r($n);

    rsort($n);
    print_r($n);

    asort($n);
    print_r($n);

    ksort($n);
    print_r($n);

    krsort($n);
    print_r($n);

    ?>
    </pre>
    <a href="array1.php"><input type="submit" value="ARRAY USANDO UNSET"></a>
</div>
</body>
</html>
 