<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO UCFIRST 16</b></h3>
    <form method="get" action="ucwords.php">

        <?php
        $nome = "murilo Gomes";
        $nome1 = ucfirst(strtolower($nome));
        echo "PRIMEIRA MAIUSCULA<br><br>";

        echo "$nome1";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO UCWORDS"/>
    </form>
    <a href="strtoupper.php"> <input type="submit" value="VOLTAR STRTOUPPER"/></a>
</div>
</body>
</html>
 