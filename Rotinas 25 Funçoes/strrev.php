<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STRREV 18</b></h3>
    <form method="get" action="strpos.php">

        <?php
        $nome = "murilo gomes";
        $nome1 = strrev($nome);
        echo "NOME AO CONTRARIO<br><br>";

        echo "$nome1";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STRPOS STRIPOS"/>
    </form>
    <a href="ucwords.php"> <input type="submit" value="VOLTAR UCWORDS"/></a>
</div>
</body>
</html>
 