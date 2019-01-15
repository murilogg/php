<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO IMPLODE 11</b></h3>
    <form method="get" action="chr.php">

        <?php
        $vetor[0] = "MURILO";
        $vetor[1] = "ESTÁ";
        $vetor[2] = "ESTUDANDO";
        $vetor[3] = "PHP";
        $text = implode(" ",$vetor); // usando implode
        print($text);

        echo "<br><br>";
        $vetores[0] = "MURILO";
        $vetores[1] = "ESTÁ";
        $vetores[2] = "ESTUDANDO";
        $vetores[3] = "PHP";
        $texto = join("#",$vetores); // usando join
        print($texto);

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO CHR"/>
    </form>
    <a href="str_split.php"> <input type="submit" value="VOLTAR STR_SPLIT"/></a>
</div>
</body>
</html>
 