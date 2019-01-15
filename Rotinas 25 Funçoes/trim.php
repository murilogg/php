<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO TRIM 5</b></h3>
    <form method="get" action="ltrim.php">

        <?php
        echo "TRIM elimina espaços no começo e no final da variavel<br><br>";
        $text = "   murilo  ";
        echo(strlen($text));
        echo " ANTES DO TRIM<br><br>";
        $novo = trim($text);
        echo "$novo <- ESTA É A VARIAVEL";
        echo "<br><br>";
        echo(strlen($novo));

        echo " DEPOIS DO TRIM<br><br>";

        ?>
        <input type="submit" value="PROXIMA FUNÇÃO LTRIM"/>
    </form>
    <a href="strlen.php"> <input type="submit" value="VOLTAR STRLEN"/></a>
</div>
</body>
</html>
 