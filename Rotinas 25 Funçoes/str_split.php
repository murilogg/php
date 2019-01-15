<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STR_SPLIT 10</b></h3>
    <form method="get" action="implode.php">

        <?php
        $nome = "MURILO";
        $vetor = str_split($nome);
        print_r($vetor);

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO IMPLODE"/>
    </form>
    <a href="explode.php"> <input type="submit" value="VOLTAR EXPLODE"/></a>
</div>
</body>
</html>
 