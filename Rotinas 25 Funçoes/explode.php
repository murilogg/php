<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO EXPLODE 9</b></h3>
    <form method="get" action="str_split.php">

        <?php
        $site = "Curso de php";
        $vetor = explode(" ", $site);
        print_r($vetor);

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STR_SPLIT"/>
    </form>
    <a href="str_word_count.php"> <input type="submit" value="VOLTAR STR_WORD_COUNT"/></a>
</div>
</body>
</html>
 