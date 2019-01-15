<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO UCWORDS 17</b></h3>
    <form method="get" action="strrev.php">

        <?php
        $nome = "murilo gomes";
        $nome1 = ucwords($nome);
        echo "PRIMEIRA LETRA DE CADA NOME COM LETRA MAIUSCULA<br><br>";

        echo "$nome1";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STRREV"/>
    </form>
    <a href="ucfirst.php"> <input type="submit" value="VOLTAR UCFIRST"/></a>
</div>
</body>
</html>
 