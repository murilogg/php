<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STRTOUPPER 15</b></h3>
    <form method="get" action="ucfirst.php">

        <?php
        $nome = "Murilo Gomes";
        $nome1 = strtoupper($nome);
        echo "TUDO MAIUSCULO<br><br>";

        echo "$nome1";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO UCFIRST"/>
    </form>
    <a href="strtolower.php"> <input type="submit" value="VOLTAR STRTOLOWER"/></a>
</div>
</body>
</html>
 