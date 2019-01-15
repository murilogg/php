<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO WORDWRAP 3</b></h3>
    <form method="get" action="strlen.php">
        <?php
        $text = "Este texto é um exemplo de string gigante usando wordwrap";
        $res = wordwrap($text, 10, "<br>\n", false);
        echo "$res<br><br>";

        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STRLEN"/>
    </form>
    <a href="print_r.php"><input type="submit" value="VOLTAR PRINT_R"></a>

</div>
</body>
</html>
 