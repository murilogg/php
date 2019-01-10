<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3>TABUADA</h3>
    <form method="get" action="tabuada1.php">
        Número: <select name='num'>
            <?php
            $cont = 1;

            while ($cont <= 10) {

                echo "<option> $cont </option>";

                $cont++;
            }
            ?>
        </select>
        <input type="submit" name="Calcular">
    </form>

</div>
</body>
</html>
