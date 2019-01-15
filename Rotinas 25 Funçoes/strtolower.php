<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STRTOLOWER 14</b></h3>
    <form method="get" action="strtoupper.php">

        <?php
        $nome = "Murilo Gomes";
        $nome1 = strtolower($nome);
        echo "TUDO MINUSCULO<br><br>";

        echo "$nome1";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STRTOUPPER"/>
    </form>
    <a href="ord.php"> <input type="submit" value="VOLTAR ORD"/></a>
</div>
</body>
</html>
 