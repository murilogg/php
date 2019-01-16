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
    <?php
    $pessoa = array("nome" => "MURILO", "idade" => 21, "peso" => 60.5);
    $pessoa["fuma"] = "Não";

    print_r($pessoa);

    foreach ($pessoa as $campo => $valor) {
        echo "O campo $campo possui o conteudo $valor<br>";
    }
    ?>
    </pre>
</div>
</body>
</html>
 