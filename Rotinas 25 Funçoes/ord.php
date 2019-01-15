<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO ORD 13</b></h3>
    <form method="get" action="strtolower.php">

        <?php
        $nome = "M";
        $nome1 = "U";
        $nome2 = "R";
        $nome3 = "I";
        $nome4 = "L";
        $nome5 = "O";
        $cod = ord($nome);
        $cod1 = ord($nome1);
        $cod2 = ord($nome2);
        $cod3 = ord($nome3);
        $cod4 = ord($nome4);
        $cod5 = ord($nome5);

        echo "AS VARIAVEIS DO NOME MURILO EM CODIGO É :<br> $cod $cod1 $cod2 $cod3 $cod4 $cod5";


        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STRTOLOWER"/>
    </form>
    <a href="chr.php"> <input type="submit" value="VOLTAR CHR"/></a>
</div>
</body>
</html>
 