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
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 3 == 0)
            continue;
        echo $i . "-";
    }
    echo "Fim<br><br>";

    $x = 4;
    $y = &$x;
    $z = ++$y;
    echo "X=$x Y=$y Z=$z<br><br>";

    function f($v, $n)
    {
        if ($n <= 0) return 1;
        else
            return $v[$n - 1] * f($v, $n - 2) + 1;
    }

    $a = array(0, 1, 2, 3);
    print (f($a, 4));


    ?>


</div>
</body>
</html>
 