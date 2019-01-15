<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STRLEN 4</b></h3>
    <form method="get" action="trim.php">

        <?php
        $text = "murilo";
        $tamanho = strlen($text);

        echo (strlen($text));

        echo " Conta o número de caracteres $tamanho";

        echo "<br><br>";

        ?>
        <input type="submit" value="PROXIMA FUNÇÃO TRIM"/>
    </form>
    <a href="wordwrap.php"><input type="submit" value="VOLTAR WORDWRAP"></a>

</div>
</body>
</html>
 