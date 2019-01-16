<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STR_REPLACE 25</b></h3>
    <form method="get" action="">

        <?php
        $frase = "Estudo programacao, Programacao é Muito legal";
        $novaFrase = str_ireplace("programacao","php",$frase);
        echo "$frase <- ORIGINAL<br>";
        echo "$novaFrase <- MODIFICADA";

        echo "<br><br>";
        ?>
    </form>
    <a href="str_repeat.php"> <input type="submit" value="VOLTAR STR_REPEAT"/></a>
</div>
</body>
</html>
 