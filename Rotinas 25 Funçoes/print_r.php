<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO PRINT_R 2</b></h3>
    <form method="get" action="wordwrap.php">
        <?php
        $x[0] = 2;
        $x[1] = 2;
        $x[2] = 2;
        echo "PRINT_R ";
        print_r($x);
        echo "<br><br>";
        echo "VAR_DUMP ";
        var_dump($x);
        echo "<br><br>";
        echo "VAR_EXPORT ";
        var_export($x);
        echo "<br><br>";


        ?>
        <input type="submit" value="PROXIMA FUNÇÃO WORDWRAP"/>
    </form>
    <a href="printf.php"><input type="submit" value="VOLTAR PRINTF"></a>

</div>
</body>
</html>
 