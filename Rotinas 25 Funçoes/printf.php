<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO PRINTF 1</b></h3>
    <form method="get" action="print_r.php">

        <?php
        $p = "leite";
        $r = 4.5;
        echo "O $p custa $r usando ECHO<br>";
        printf("O %s custa %.2f usando PRINTF", $p, $r);

        echo "<br><br>";

        ?>
        <input type="submit" value="PROXIMA FUNÇÃO PRINT_R"/>
    </form>

</div>
</body>
</html>
 