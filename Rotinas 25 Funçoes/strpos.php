<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STRPOS 19 E STRIPOS 20</b></h3>
    <form method="get" action="substr_count.php">

        <?php
        $nome = "estou aprendendo php";
        $pos = strpos($nome,"php");
        echo "$nome <br> a string foi encontrada na posição $pos";

        echo "<br><br>";
        $nome = "estou aprendendo PHP";
        $pos = stripos($nome,"php");
        echo "$nome <br> a string foi encontrada na posição $pos";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO SUBSTR_COUNT"/>
    </form>
    <a href="strrev.php"> <input type="submit" value="VOLTAR STRREV"/></a>
</div>
</body>
</html>
 