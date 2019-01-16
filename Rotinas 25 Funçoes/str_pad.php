<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STR_PAD 23</b></h3>
    <form method="get" action="str_repeat.php">

        <?php
        $nome = "MURILO";
        $novo = str_pad($nome, 15, "#", STR_PAD_RIGHT);
        echo "Meu nome é $novo GOMES";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STR_REPEAT"/>
    </form>
    <a href="substr.php"> <input type="submit" value="VOLTAR SUBSTR"/></a>
</div>
</body>
</html>
 