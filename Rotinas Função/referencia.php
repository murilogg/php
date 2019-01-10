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
    include "funcoes.php";
    ola();

    function soma(&$x){
        $x += 2;
        echo "A soma é $x<br>";
    }

    $a= 2;
    soma($a);
    echo " A soma é : $a";

    ?>
</div>
</body>
</html>
 