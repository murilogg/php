<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO SUBSTR_COUNT 21</b></h3>
    <form method="get" action="substr.php">

        <?php
        $nome = "Estudando php e praticando php, php";
        $cont = substr_count($nome,"php");
        echo "A frase php foi encontrada $cont";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO SUBSTR"/>
    </form>
    <a href="strpos.php"> <input type="submit" value="VOLTAR STRPOS E STRIPOS"/></a>
</div>
</body>
</html>
 