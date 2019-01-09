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

    $num = isset($_GET["num"])?$_GET["num"]:0;
    $op = isset($_GET["oper"])?$_GET["oper"]:1;

    switch ($op){
        case 1:
            $r = $num * 2 ;
            break;
        case 2:
            $r = $num ^ 3 ;
            break;
        case 3:
            $r = sqrt($num) ;
            break;
        default;
    }
    echo "O resultado da Operação solicitada foi <span class='foco'>$r</span>";
    ?>
    <a href="switch.html "><br>Voltar</a>
</div>
</body>
</html>
 