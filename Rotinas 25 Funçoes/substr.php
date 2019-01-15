<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO SUBSTR 22</b></h3>
    <form method="get" action="">

        <?php
        $nome = "Estudando php";
        $cont = substr($nome,0,6);
        echo "$nome<br>";
        echo "$cont";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO "/>
    </form>
    <a href="substr_count.php"> <input type="submit" value="VOLTAR SUBSTR_COUNT"/></a>
</div>
</body>
</html>
 