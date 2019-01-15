<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO LTRIM 6</b></h3>
    <form method="get" action="rtrim.php">

        <?php

        echo "LTRIM elimina espaços no começo da variavel<br><br>";

        $text = "   murilo  ";
        echo(strlen($text));
        echo " ANTES DO LTRIM<br><br>";
        $novo = ltrim($text);
        echo "$novo <- ESTA É A VARIAVEL";
        echo "<br><br>";
        echo(strlen($novo));

        echo " DEPOIS DO LTRIM<br><br>";

        ?>
        <input type="submit" value="PROXIMA FUNÇÃO RTRIM"/>
    </form>
    <a href="trim.php"> <input type="submit" value="VOLTAR TRIM"/></a>
</div>
</body>
</html>
 