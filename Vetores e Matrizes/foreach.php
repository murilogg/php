<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <table border="1">
            <tr>
    <?php
    $n = range(1, 20, 2);

    foreach ($n as $valor) {
        echo "<td>$valor ";
    }

    ?>
            </tr>
        </table>
    </pre>
</div>
</body>
</html>
 