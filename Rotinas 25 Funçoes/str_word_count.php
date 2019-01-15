<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STR_WORD_COUNT 8</b></h3>
    <form method="get" action="explode.php">

        <?php


        $var = "Conta quantas palavras tem uma string";
        echo "$var<br>";
        $cont = str_word_count($var,0);
        print ($cont);

        echo "<br><br>";
        $arraylist = str_word_count($var,1);
        print_r($arraylist);
        echo "<br><br>";


        ?>
        <input type="submit" value="PROXIMA FUNÇÃO EXPLODE"/>
    </form>
    <a href="rtrim.php"> <input type="submit" value="VOLTAR RTRIM"/></a>
</div>
</body>
</html>
 