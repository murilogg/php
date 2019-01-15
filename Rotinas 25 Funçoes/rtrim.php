<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO RTRIM 7</b></h3>
    <form method="get" action="str_word_count.php">

        <?php

        echo "RTRIM elimina espaços no final da variavel<br><br>";

        $text = "   murilo  ";
        echo(strlen($text));
        echo " ANTES DO RTRIM<br><br>";
        $novo = rtrim($text);
        echo "$novo <- ESTA É A VARIAVEL";
        echo "<br><br>";
        echo(strlen($novo));

        echo " DEPOIS DO RTRIM<br><br>";

        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STR_WORD_COUNT"/>
    </form>
    <a href="ltrim.php"> <input type="submit" value="VOLTAR LTRIM"/></a>
</div>
</body>
</html>
 